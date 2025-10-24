<?php

    function sumarCartas(&$cartas){

        $suma=0;
        $num=0;

        foreach($cartas as $carta){
            $num=substr($carta, 1);
            $num = (int) $num;

            if($num==1 || $num==11 || $num==12 || $num==13){
                $suma=$suma + 0.5;
            }else{
                $suma = $suma + $num;
            }

        }

        return $suma;
    }

?>