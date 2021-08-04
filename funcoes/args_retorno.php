<div class="titulo">Argumentos & Retorno.</div>

<?php
function obterMensagem() {
    return 'Sejá Bem Vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem Vindo: {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Luiz');

function soma($a, $b) {
    return $a + $b;
}

echo '<br>', soma(4, 5);
echo '<br>', soma(45, 78);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5678);
echo '<br>', $variavel;