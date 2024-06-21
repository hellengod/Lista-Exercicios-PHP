<?php
//18 - Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.
// String JSON
$jsonString = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

// Converte a string JSON em um objeto PHP
$objeto = json_decode($jsonString);

// Exibe o objeto convertido
echo "Nome: " . $objeto->nome . "\n";
echo "Ano de Nascimento: " . $objeto->anoNascimento . "\n";
echo "Profissão: " . $objeto->profissao . "\n";
?>
