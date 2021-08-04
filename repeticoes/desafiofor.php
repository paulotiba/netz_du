<div class="titulo">Desafio For.</div>

<!-- 
    #
    ##
    ###
    ####
    #####
    1 pode usar incremento, $i++
    2 não pode usar incremento $++
 -->

<?php

$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#') {
        echo "$impressao2 <br>";
    }
