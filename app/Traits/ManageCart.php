<?php
namespace App\Traits;

use App\Models\Coupon;
use App\Models\Property;
use App\Services\Cart;

trait ManageCart {
    public function showCart() {
        return view("properties.cart");
    }

    public function addPropertyToCart(Property $property) {
        $cart = new Cart;
        $cart->addProperty($property);
        session()->flash("message", ["success", __("Propiedad añadida al carrito correctamente")]);
        return redirect(route('cart'));
    }

    public function removePropertyFromCart(Property $property) {
        $cart = new Cart;
        $cart->removeProperty($property->id);
        session()->flash("message", ["success", __("Propiedad eliminada del carrito correctamente")]);
        return back();
    }

    public function applyCoupon() {
        session()->remove("coupon");
        session()->save();

        $code = request("coupon");
        $coupon = Coupon::available($code)->first();
        if (!$coupon) {
            session()->flash("message", ["danger", __("El cupón que has introducido no existe")]);
            return back();
        }

        $cart = new Cart;
        $coursesInCart = $cart->getContent()->pluck("id");
        $totalCourses = $coupon->courses()->whereIn("id", $coursesInCart)->count();

        if ($totalCourses) {
            session()->put("coupon", $code);
            session()->save();
            session()->flash("message", ["success", __("El cupón se ha aplicado correctamente")]);
            return back();
        }
        session()->flash("message", ["danger", __("El cupón no se puede aplicar")]);
        return back();
    }
}
