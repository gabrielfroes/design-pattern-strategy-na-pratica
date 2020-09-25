<?php declare(strict_types=1);

namespace App\Service\Shipping;

interface ShippingInterface
{
    public function calc(float $weight): float;
}