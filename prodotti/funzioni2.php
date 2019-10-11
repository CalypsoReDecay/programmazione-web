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
    } if($paginaCorrente == $pagineTot){
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

function isPaginaInIntervallo($pagina, $passo, $numProdotti){
    $inizioFor = ($pagina - 1) * $passo;
    return $inizioFor <= $numProdotti;
}

function getInizioFor($pagina, $passo, $numProdotti){
    if(($pagina <= 0) or ($passo <= 0)){
        return 0;
    } else {
        if(isPaginaInIntervallo($pagina, $passo, $numProdotti)){
            return ($pagina - 1) * $passo;
        } else {
            return 0;
        }
    }
}

function getFineFor($pagina, $passo, $numProdotti){
    if(($pagina <= 0) or ($passo <= 0)){
        return 0;
    } else {
        if(isPaginaInIntervallo($pagina, $passo, $numProdotti)){
            // restituisco finefor
            return ;
        } else {
            return 0;
        }
    }
}

function getId($prodotto){
    return $prodotto[0];
}

function isNotDuplicato($prodEstratto, $prodsCorrelati){
    for ($x = 0; $x < $prodsCorrelati; $x++){
        $tmpProdotto = $prodsCorrelati[$x];
        if(getId($prodEstratto) == getId($prodsCorrelati)){
            return False;
        }
    }
    return True;
}

function isNotProdottoPagina($prodEstratto, $prodPagina){
    return getId($prodPagina) != getId($prodEstratto);
}

function isProdottoUtile($prodottoEstratto, $prodottiCorrelati, $prodottoPagina){
    return isNotDuplicato($prodottoEstratto, $prodottiCorrelati) and isNotProdottoPagina($prodottoEstratto, $prodottoPagina);
}

/*function getProdottiCorrelati($prodotti, $numEstrazioni){
    $prodottiEstratti = [];
    $counter = 0;
 while($counter != $numEstrazioni){
     $numEstratto = rand(0, count($prodotti));
     $prodottoEstratto = $prodotti[$numEstratto];
     if(isProdottoUtile($prodottoEstratto, $prodottiCorrelati, $prodottoPagina)){
        $prodottiEstratti[$counter++] = $prodottoEstratto;
        $numEstrazioni --;
     }
 }
     return $prodottiCorrelati;
 }*/

 # funzione estrazione numeri random con array clone che si aggiorna - array_splice toglie dall'array clone
 function getProdottiEstratti($estraendi, $estrazioni){
    $prodottiEstr = [];
    $counter = 0;
 while($counter != $estrazioni){
     $numEstratto = rand(0, count($estraendi));
     $prodottiEstr[$counter++] = $estraendi[$numEstratto];
     \array_splice($estraendi, $numEstratto, $numEstratto);
     
 }
     return $prodottiEstr;
 }

 # estraendi = array clone

 /*$prodottiCorrelati = getProdottiCorrelati($prodotti, $prodotti[1], 2);
 for($x=0; $x < count($prodottiCorrelati); $x++){
     $prodottiCorrelati[$x][1];
 }*/


?>