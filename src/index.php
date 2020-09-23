<?php

include_once "services/frete.php";

$sedex = new \Services\Sedex();
$dhl = new \Services\DHL();
$me = new \Services\MercadoEnvio();

$frete = new \Services\Frete($sedex);
echo $frete->calcula(10);

$frete->setServico($dhl);
echo '<br>' . $frete->calcula(10);

$frete->setServico($me);
echo '<br>' . $frete->calcula(10);