<div class="titulo"> Valor X Referência</div>

<?php

$variavel = 'valor inicial';
echo $variavel;
// atribuição por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";

// atribuição por referência

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel";
echo "<br>$variavelReferencia";
