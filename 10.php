<?php
// 10 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a 
// informação se o aluno foi aprovado ou não. Se a nota for maior do que 6, o aluno foi aprovado. 
// Caso contrário, foi reprovado.

$notas = [7, 4, 8, 5, 10, 3, 6];

foreach ($notas as $i => $nota) {
    if ($nota > 6) {
        echo "Aluno " . ($i + 1) . " - Nota: " . $nota . " - Aprovado<br>";
    } else {
        echo "Aluno " . ($i + 1) . " - Nota: " . $nota . " - Reprovado<br>";
    }
}
?>
