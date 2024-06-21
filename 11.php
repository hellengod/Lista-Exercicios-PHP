<?php
//11 - Defina um array associativo que representa uma conta bancária (com titular e saldo)
// e exiba suas informações na tela.

$conta = [
    "titular" => "Hellen",
    "saldo"=> 4500,
];

echo "Titular da conta: " . $conta["titular"] . ", " ." Saldo: " . $conta["saldo"];
?>