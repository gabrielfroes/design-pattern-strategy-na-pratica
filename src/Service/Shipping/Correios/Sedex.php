<?php declare(strict_types=1);

namespace App\Service\Shipping\Correios;

use App\Service\Shipping\ShippingInterface;

class Sedex implements ShippingInterface
{
    public function calc(float $weight): float
    {
        return 30;
    }
}