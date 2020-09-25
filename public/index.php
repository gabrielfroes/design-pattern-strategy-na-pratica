<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Service\Shipping;

$sedex = new Shipping\Correios\Sedex();
$dhl = new Shipping\Dhl();
$me = new Shipping\MercadoEnvio();

$frete = new Shipping($sedex);
echo $frete->calc(10);

$frete->setShipping($dhl);
echo '<br>' . $frete->calc(10);

$frete->setShipping($me);
echo '<br>' . $frete->calc(10);