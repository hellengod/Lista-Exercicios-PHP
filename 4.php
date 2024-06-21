<?php
//4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "$ano é um ano bissexto.";
} else {
    echo "$ano não é um ano bissexto.";
}
?>