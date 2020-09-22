<?php 

class Correios{

    function calculaRemessa($servico, $peso){
        $valor = 0;

        if ($servico == "PAC")
            $valor = 10;
        
        else if ($servico == "SEDEX")
            $valor = 30;
        

        return $valor;

    }

}
