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

function isPaginaInIntervallo($pagina, $passo,$numProdotti){
    $inizioFor = ($pagina -1) * $passo;
    return $inizioFor <= $numProdotti;
}

function getInizioFor($pagina, $passo,$numProdotti){
    if (($pagina <=0) or ($passo <=0)) {
    return 0;

} else {
   if (isPaginaInIntervallo($pagina, $passo,$numProdotti)){
       return ($pagina -1) * $passo;
}else {
    return 0;
}
}
}


function getFineFor($pagina, $passo, $numProdotti){
    if (($pagina <=0) or ($passo <=0)) {
        return 0;
    } else {
        if (isPaginaInIntervallo($pagina, $passo,$numProdotti)){
            //restituisco finefor 
return 10;
        }else {
            return 0;
    
}
}
}

?>



