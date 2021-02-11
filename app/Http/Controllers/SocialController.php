<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserSocialAccount;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function facebookRedirect(string $driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function loginWithFacebook(string $driver)
    {

        if (! request()->has('code') || request()->has('denied') ) {
            session()->flash('message', ['danger', __('Inicio de sesión cancelado')]);
            return redirect('login');
        }

        $socialUser = Socialite::driver($driver)->user();
        $user = null;
        $success = true;
        $email = $socialUser->email;
        $check = User::whereEmail($email)->first();

        if ($check) {
            $user = $check;
        } else {
            \DB::beginTransaction();
            //dd($socialUser->avatar);
            try {
                $user = User::create([
                    'name' => $socialUser->name,
                    'email' => $email,
                ]);

                UserSocialAccount::create([
                    'user_id' => $user->id,
                    'provider' => $driver,
                    'provider_uid' => $socialUser->id,
                ]);
            } catch (Exception $exception) {
                $success = $exception->getMessage();
                \DB::rollBack();
            }

        }
        
        if ($success === true) {
            \DB::commit();
            auth()->loginUsingId($user->id);
            return redirect(route('dashboard'));
        }

        sesion()->flash('message', ['danger', $success]);
        return redirect('login');
    }
}
