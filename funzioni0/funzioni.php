<?php
function getPagine($paginaCorrente, $pagineTot){
    if($pagineTot == 0){
    return [];
        } elseif($pagineTot == 1){
    return [];
        } elseif($pagineTot == 2){
    return [1,2];
        } elseif ($pagineTot == 3){
    return [1,2,$pagineTot];
        } elseif ($pagineTot == 4){
    return [1,2,3,$pagineTot];
        } elseif ($pagineTot == 5){
    return [1,2,3,4,$pagineTot];
        } elseif ($pagineTot == 6){
    return [1,2,3,$pagineTot];
    }
        if($paginaCorrente == $pagineTot){
    return [1, $pagineTot - 2, $pagineTot - 1, $pagineTot];
        } elseif($paginaCorrente == 0){
    return [];
        } elseif($paginaCorrente == 1){
    return [1,2,3,$pagineTot];
        } elseif($paginaCorrente == 2){
    return [1,2,3,$pagineTot];
        } elseif($paginaCorrente == $pagineTot - 1){
    return [1, $pagineTot - 2, $pagineTot - 1, $pagineTot];
        } elseif($paginaCorrente > $pagineTot){
    return [];
        } else {
       return [1, $paginaCorrente -1, $paginaCorrente, $paginaCorrente + 1, $pagineTot];
   }
} 


?>



