<?
namespace Services;

// External Lib
include_once "shipping/correios.php";
include_once "shipping/dhl.php";
include_once "shipping/fedex.php";
include_once "shipping/jadlog.php";
include_once "shipping/tnt.php";
include_once "shipping/mercadoenvio.php";

// Strategy
interface FreteServico{
    function calcula(float $peso): float;
}

// Concrete Strategy
class Sedex implements FreteServico {
    function calcula(float $peso): float {
        $correios = new \Correios();
        $valorTotal = $correios->calculaRemessa("SEDEX", $peso);
        return $valorTotal;
    }
}

class Pac implements FreteServico {
    function calcula(float $peso): float {
        $correios = new \Correios();
        $valorTotal = $correios->calculaRemessa("PAC", $peso);
        return $valorTotal;
    }
}

class MercadoEnvio implements FreteServico {
    function calcula(float $peso): float {
        $mercadoenvio = new \MercadoEnvio();
        $valorTotal = $mercadoenvio->calcula($peso);
        return $valorTotal;
    }
}


class JadLog implements FreteServico {
    function calcula(float $peso): float {
            $valorTotal = calculaFreteJadLog($peso);
            return $valorTotal;
    }
}

class DHL implements FreteServico {
    function calcula(float $peso): float {
            $dhl = new \DHL();
            $valorTotal = $dhl->priceCalculator($peso);
            return $valorTotal;
    }
}

class Fedex implements FreteServico {
    function calcula(float $peso): float {
            $fedex = new \Fedex();
            $valorTotal = $fedex->shippingPrice($peso);
            return $valorTotal;
    }
}

class TNT implements FreteServico {
    function calcula(float $peso): float {
            $tnt = new \TNT();
            $valorTotal = $tnt->shippingPriceCalculator($peso);
            return $valorTotal;
    }
}

// Context
class Frete {

    private $servico;

    function __construct (FreteServico $servico){
        $this->servico = $servico;
    }

    function setServico (FreteServico $servico){
        $this->servico = $servico;
    }

    function calcula($peso) {
        $valorTotal = $this->servico->calcula($peso);
        return $valorTotal;
    }

}