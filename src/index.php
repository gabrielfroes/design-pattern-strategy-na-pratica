<?php

include_once "services/frete.php";

$frete = new \Services\Frete(new \Services\Sedex());
echo $frete->calcula(10);

$frete->setServico(new \Services\DHL());
echo '<br>' . $frete->calcula(10);

$frete->setServico(new \Services\MercadoEnvio());
echo '<br>' . $frete->calcula(10);

$frete = new \Services\DHLFrete();
echo '<br>' . $frete->calcula(10);
