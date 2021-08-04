<div class="titulo">Closure & Callable.</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

function soma2($a, $b) {
    return $a + $b;
}
echo soma2(2, 3) . ' ';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';
var_dump($soma1);


function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
Executar(2, 3, '+', $soma1);
Executar(2, 3, '+', 'soma2');

function executar2($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar2(100, 100, '+', $soma1);
executar2(3000, 2000, '+', 'soma2');