<?php

    function mark($a){
        if($a < 0 || $a > 100 ){
            return 0;
        }elseif ($a >= 80){
            return 5;
        }elseif ($a >= 70){
            return 4;
        }elseif ($a >= 60){
            return 3.5;
        }elseif ($a >= 50){
            return 3;
        }elseif ($a >= 40){
            return 2;
        }elseif ($a >= 33){
            return 1;
        }else{
            return 0;
        }
    }



    
