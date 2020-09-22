<?php

include_once "services/frete.php";

$frete = new \Services\Frete();
echo $frete->calcula("sedex", 10);