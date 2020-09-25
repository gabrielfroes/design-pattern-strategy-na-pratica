<?php declare(strict_types=1);

use App\Service\Shipping;

it('calculate shipping taxes', function () {
    $shipping = new Shipping(new Shipping\Correios\Sedex());
    expect($shipping->calc(10))->toBe(30.0);

    $shipping->setShipping(new Shipping\Dhl());
    expect($shipping->calc(10))->toBe(6.99);

    $shipping->setShipping(new Shipping\MercadoEnvio());
    expect($shipping->calc(10))->toBe(1.99);
});