<?php declare(strict_types=1);

namespace App\Service\Shipping;

class Dhl implements ShippingInterface
{
    public function calc(float $weight): float
    {
        return 6.99;
    }
}