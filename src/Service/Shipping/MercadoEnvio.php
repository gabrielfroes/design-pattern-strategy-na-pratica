<?php declare(strict_types=1);

namespace App\Service\Shipping;

class MercadoEnvio implements ShippingInterface
{
    public function calc(float $weight): float
    {
        return 1.99;
    }
}