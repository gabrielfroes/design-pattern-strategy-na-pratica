<?php declare(strict_types=1);

namespace App\Service\Shipping;

class Jadlog implements ShippingInterface
{
    public function calc(float $weight): float
    {
        return 4.99;
    }
}