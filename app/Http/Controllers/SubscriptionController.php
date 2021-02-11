<?php

namespace App\Http\Controllers;

use \Stripe\Stripe;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            if (auth()->user()->subscribed('main')) {
                return redirect('/')
                    ->with('message', ['warning', __("Actualmente ya estás subscripto a otro plan")]);
            }
            return $next($request);
        })->only(['plans', 'processSubscription']);
    }

    public function plans()
    {
        return view('subscriptions.plans');
    }

    public function processSubscriptions(Request $request)
    {
        if ( !auth()->user()->hasPaymentMethod()) {
            return redirect(
                route("billing.credit_card_form")
            )->with("message", ["warning", __("Debes añadir un método de pago antes de procesar el pedido")]);
        }

        //dd($request->plan);
        $type = $request->type;
        $name = $request->name;
        //$token = request('stripeToken');
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            if (request()->has('coupon')) {
                request()->user()->newSubscription($name, $type, request('main'))
                    ->withCoupon(request('coupon'))->add();
            } else {
                request()->user()->newSubscription($name, $type, request('main'))
                    ->add();
            }

            return redirect(route('dashboard'))
                ->with('message', ['success', __("La suscripción se ha llevado a cabo correctamente")]);
        } catch (\Throwable $th) {
            $error = $th->getMessage();
            return back()->with('message', ['danger', $error]);
        }
    }

    public function admin()
    {
        $subscriptions = auth()->user()->subscriptions;
        return view('subscriptions.admin', compact('subscriptions'));
    }

    public function resume()
    {
        $subscription = \request()->user()->subscription(\request('plan'));
        if ($subscription->cancelled() && $subscription->onGracePeriod()) {
            \request()->user()->subscription(\request('plan'))->resume();
            return back()->with('message', ['success', __("Has reanudado tu suscripción correctamente")]);
        }
        return back();
    }

    public function cancel()
    {
        auth()->user()->subscription(\request('plan'))->cancel();
        return back()->with('message', ['success', __("La suscripción se ha cancelado correctamente")]);
    }
}
