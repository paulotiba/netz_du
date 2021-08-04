<div class="titulo">Recursividade.</div>

<?php

// function somaUmAte($numero) {
//     $soma = 0;
//     for(; $numero >= 1; $numero--) {
//         $soma += $numero;
//     }
//     return $soma;
// }

// echo somaUmAte(7) . '<br>';

function somaUmAte($numero)
{
    $soma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

function somaRecursivaUmAte($numero)
{
    // Condição de Parada!!
    if ($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}
echo somaRecursivaUmAte(175) . '<br>';

function somaRecursivaEconomica($numero)
{
    return $numero === 1 ? 1 :
        $numero + somaRecursivaEconomica($numero - 1);
}
echo somaRecursivaEconomica(15) . '<br>';
