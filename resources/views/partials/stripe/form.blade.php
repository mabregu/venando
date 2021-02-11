<form action="{{ route('subscriptions.process_subscriptions') }}" method="post">
    @csrf
    {{-- <input type="text"
        name="coupon"
        placeholder="{{ __('¿Tienes un cupón?') }}"
    /> --}}

    <input type="hidden" name="type" value="{{ $product['type'] }}" />
    <hr>
    <stripe-form
        class="bg-gradient-base border border-blue-600 hover:bg-white text-white hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer"
        stripe_key="{{ env('STRIPE_KEY') }}"
        name={{ $product['name'] }}
        amount={{ $product['amount'] }}
        description="{{ $product['description'] }}"
    >
    </stripe-form>
</form>