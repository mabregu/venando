<?php
namespace App\Services;
use App\Helpers\Currency;
use App\Models\Coupon;
use App\Models\Property;
use Illuminate\Support\Collection;

/**
 * Class Cart
 * @package App\Classes
 */
class Cart {

    /**
     * @var Collection
     */
    protected Collection $cart;

    /**
     * Cart constructor.
     */
    public function __construct() {
        if (session()->has("cart")) {
            $this->cart = session("cart");
        } else {
            $this->cart = new Collection;
        }
    }

    /**
     *
     * Get cart contents
     *
     */
    public function getContent(): Collection {
        return $this->cart;
    }

    /**
     * Save the cart on session
     */
    protected function save(): void {
        session()->put("cart", $this->cart);
        session()->save();
    }

    /**
     *
     * Add property on cart
     *
     * @param Property $property
     */
    public function addProperty(Property $property): void {
        $this->cart->push($property);
        $this->save();
    }

    /**
     *
     * Remove property from cart
     *
     * @param int $id
     */
    public function removeProperty(int $id): void {
        $this->cart = $this->cart->reject(function (Property $property) use ($id) {
            return $property->id === $id;
        });
        $this->save();
    }

    /**
     *
     * calculates the total cost in the cart
     *
     * @param bool $formatted
     * @return mixed
     */
    public function totalAmount($formatted = true) {
        $amount = $this->cart->sum(function (Property $property) {
            return $property->price;
        });
        if ($formatted) {
            return Currency::formatCurrency($amount);
        }
        return $amount;
    }

    /**
     *
     * all taxes for cart
     *
     * @param bool $formatted
     * @return float|int|string
     */
    public function taxes($formatted = true) {
        $total = $this->totalAmount(false);
        if ($total) {
            $total = ($total * env('TAXES')) / 100;
            if ($formatted) {
                return Currency::formatCurrency($total);
            }
            return $total;
        }
        return 0;
    }

    /**
     *
     * Total products in cart
     *
     * @return int
     */
    public function hasProducts(): int {
        return $this->cart->count();
    }

    /*
     * Clear cart
     */
    public function clear(): void {
        $this->cart = new Collection;
        $this->save();
    }

    /**
     *
     * calculates the total cost in the cart with coupon
     *
     * @param bool $formatted
     * @return string
     */
    public function totalAmountWithDiscount($formatted = true) {
        $amount = $this->totalAmount(false);
        $withDiscount = $amount;
        if (session()->has("coupon")) {
            $coupon = Coupon::available(session("coupon"))->first();
            if (!$coupon) {
                return $amount;
            }

            $propertiesInCart = $this->getContent()->pluck("id");
            if ($propertiesInCart) {
                // properties attached to coupon in database
                $propertiesForApply = $coupon->properties()->whereIn("id", $propertiesInCart);

                // id properties attached on database for apply coupon
                $idProperties = $propertiesForApply->pluck("id")->toArray();

                if (!count($idProperties)) {
                    $this->removeCoupon();
                    session()->flash("message", ["danger", __("El cupón no se puede aplicar")]);
                    return $amount;
                }

                // total price properties without discount applied
                $priceProperties = $propertiesForApply->sum("price");

                // check discount type and apply
                if ($coupon->discount_type === Coupon::PERCENT) {
                    $discount = round($priceProperties - ($priceProperties * ((100 - $coupon->discount) / 100)), 2);
                    $withDiscount = $amount - $discount;
                }
                if ($coupon->discount_type === Coupon::PRICE) {
                    $withDiscount = $amount - $coupon->discount;
                }
            } else {
                $this->removeCoupon();
                return $amount;
            }
        }
        if ($formatted) {
            return Currency::formatCurrency($withDiscount);
        }
        return $withDiscount;
    }

    protected function removeCoupon():void {
        session()->remove("coupon");
        session()->save();
    }
}
