<?php
// 8 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do 
// horário encontrado em uma variável (inteiro representando as horas).

$hora = 12;

switch (true) {
    case ($hora >= 0 && $hora < 12):
        $saudacao = "Bom dia";
        break;
    case ($hora >= 12 && $hora < 18):
        $saudacao = "Boa tarde";
        break;
    case ($hora >= 18 && $hora <= 23):
        $saudacao = "Boa noite";
        break;
    default:
        $saudacao = "Hora inválida";
}

echo $saudacao;
?>
