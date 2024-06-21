<?php
//13 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$array = [1, 9, 3, 8, 5, 7];
rsort($array); 
$top3 = array_slice($array, 0, 3); // Pega os 3 primeiros elementos do array
echo $top3[0]; 
echo $top3[1]; 
echo $top3[2];