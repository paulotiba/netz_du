<div class="titulo">Operador Ternário!!</div>



<?php

$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de Idade!';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 13;
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';
echo "$status<br>";

$idade = 67;
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de Idade' : 'Menor de Idade';
echo "$status<br>";
