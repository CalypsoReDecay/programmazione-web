<?php
function getPagine ($paginaCorrente, $pagineTotali){
if ($paginaCorrente == $pagineTotali){
    return [1,$pagineTotali -2,$pagineTotali -1,$pagineTotali];
} elseif 
    ($paginaCorrente == 1){
        return [1,2,3,$pagineTotali];
}elseif 
        ($paginaCorrente == $pagineTotali - 1){
            return [1,98,99,$pagineTotali];
        }elseif 
        ($paginaCorrente == 0){
            return [];
        }elseif 
        ($paginaCorrente > $pagineTotali){
            return [];
        } else {
        return [1, $paginaCorrente - 1, $paginaCorrente, $paginaCorrente +1, $pagineTotali];
    }

}
   




?>
