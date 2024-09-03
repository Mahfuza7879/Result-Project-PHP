<?php

    if($tt == 5 ){
        return $grade = "apni A+ Paisen";
    }elseif($tt >= 4){
        return $grade = "apni A Paisen";
    }elseif($tt >= 3.5){
        return $grade = "apni A- Paisen";
    }elseif($tt >= 3){
        return $grade = "apni B Paisen";
    }elseif($tt >= 2){
        return $grade = "apni c Paisen";
    }elseif($tt >= 1){
        return $grade = "apni D Paisen";
    }elseif($tt > 0){
        return $grade = "pass korar jonno opekkha korun";
    }else{
        return $grade = "No grade not show at this time";
    }