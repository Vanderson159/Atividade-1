<?php 
    
    $ano = "1700";

    function SeculoAno($ano){
        $tamanho = strlen($ano);
       // $aux = $tamanho * -1;
        $doisUltimos = substr($ano, -2); //pegando os dois últimos caracteres
        
       if($doisUltimos == 00){
            $seculo = substr($ano, 0, $tamanho-2); //pegando os dois primeiros caracteres
       }else{
            if($tamanho > 3){
                $seculo = substr($ano, 0, $tamanho-2);
                $seculo += 1;
            }else{
                if($tamanho < 4){
                    $seculo = substr($ano, 0, 1); //pegando o primeiro caracteres
                    $seculo += 1;
                }
            } 
       }

        echo ("Ano ".$ano." = século ".$seculo);
    }

    SeculoAno($ano);
?>
