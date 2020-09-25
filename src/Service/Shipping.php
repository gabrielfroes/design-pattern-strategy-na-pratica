<?php declare(strict_types=1);

namespace App\Service;

use App\Service\Shipping\ShippingInterface;

class Shipping implements ShippingInterface
{
    private ShippingInterface $shipping;

    public function __construct(ShippingInterface $shipping)
    {
        $this->shipping = $shipping;
    }

    public function setShipping(ShippingInterface $shipping): Shipping
    {
        $this->shipping = $shipping;
        return $this;
    }

    public function calc(float $weight): float
    {
        return $this->shipping->calc($weight);
    }
}