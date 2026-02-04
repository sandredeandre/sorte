	<?php
	
	function gerarCodigoUnico() {
        $alfabeto   = "0123456789";
        $tamanho    = 12;
        $letra      = "0035";
        $resultados  = "";

        for ($i = 1; $i < $tamanho ; $i++ ) {
            $letra      = substr( $alfabeto, rand(0,23), 1); 
            $resultados  .= $letra;
        }

      
        return  $resultados;
    }
