<?php declare(strict_types=1);

namespace App\Service\Shipping;

class Fedex implements ShippingInterface
{
    public function calc(float $weight): float
    {
        return 8;
    }
}