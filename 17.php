<?php
//17 - Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" 
//no final do arquivo e depois o feche.

$arquivo = fopen("Lista de exercícios.txt","a");
$escrita = "PHP e incrivel";
fwrite($arquivo, $escrita);
?>
