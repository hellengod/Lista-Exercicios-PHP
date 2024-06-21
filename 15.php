<?php
//15 - Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

$array = [ "Maca", "Banana", "Abacaxi", "Melancia"];
asort($array);
foreach ($array as $ordem ) {
    echo  "$ordem \n";
}
?>