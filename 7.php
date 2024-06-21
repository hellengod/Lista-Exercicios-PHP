<?php
//7 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$peso = 65.00;
$altura = 1.73;

$IMC = $peso / ($altura * $altura);

switch (true) {
    case ($IMC < 16):
        $classificacao = "Magreza grau III";
        break;
    case ($IMC > 16 && $IMC < 16.9):
        $classificacao = "Magreza grau II";
        break;
    case ($IMC > 17 && $IMC < 18.4):
        $classificacao = "Magreza grau I";
        break;
    case ($IMC > 18.5 && $IMC < 24.9):
        $classificacao = "Eutrofia";
        break;
    case ($IMC > 25 && $IMC < 29.9):
        $classificacao = "Pre-obesidade";
        break;
    case ($IMC > 30 && $IMC < 34.9):
        $classificacao = "Obesidade Moderada grau I";
        break;
    case ($IMC > 35 && $IMC < 39.9):
        $classificacao = "Obesidade severa grau II";
        break;
    case ($IMC >= 40 ):
        $classificacao = "Obesidade Muito severa grau III";
        break;  
    }

    echo "IMC: $IMC, Classificação: $classificacao";
?>