<?php


    if($bangla > 0 && $english > 0 && $math > 0){
        return $gpa = ($bangla + $english + $math)/3;
    }else{
        return $gpa = 0;
    }