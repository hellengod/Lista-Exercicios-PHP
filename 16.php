<?php
//16 - Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.
$arquivo = fopen("Lista de exercícios.txt" , "r");
$primeiraLinha = fgets($arquivo);
echo $primeiraLinha;
fclose($arquivo);
?>