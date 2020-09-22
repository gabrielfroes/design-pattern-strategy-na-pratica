<?
namespace Services;

// External Lib
include_once "shipping/correios.php";
include_once "shipping/dhl.php";
include_once "shipping/fedex.php";
include_once "shipping/jadlog.php";
include_once "shipping/tnt.php";

class Frete {

    public function calcula($servico, $peso) {

        if($servico == "sedex") {
            $correios = new \Correios();
            $valorTotal = $correios->calculaRemessa("SEDEX", $peso);

        } else if($servico == "pac") {
            $correios = new \Correios();
            $valorTotal = $correios->calculaRemessa("PAC", $peso);

        } else if($servico == "jadlog") {
            $valorTotal = calculaFreteJadLog($peso);

        } else if($servico == "dhl") {
            $dhl = new \DHL();
            $valorTotal = $dhl->priceCalculator($peso);

        } else if($servico == "fedex") {
            $fedex = new \Fedex();
            $valorTotal = $fedex->shippingPrice($peso);
            
        } else if($servico == "tnt") {
            $tnt = new \TNT();
            $valorTotal = $tnt->shippingPriceCalculator($peso);

        } else {
            throw new Exception('Serviço de frete inválido');
        }
        
        return $valorTotal;
    }

}