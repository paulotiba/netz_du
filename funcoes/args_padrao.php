<div class="titulo">Args Padrão.</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem Vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

echo '<hr>';

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

anotarPedido('Hamburger');
echo '<hr>';
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}
echo '<hr>';

anotarPedido2('Vinho', 'Pizza');

// parametro fixo sempre no final ?? se torna mais dinamico!