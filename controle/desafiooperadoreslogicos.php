<div class="titulo">Desafio Operadores Logicos</div>
<!-- 
Dois trabalhos -> terça e quinta !
__se os dois forem executados -> TV 50' e sorvete
__se apenas um for executado -> TV 32' e sorvete
__se nenhum for executado -> Fica em Casa mais saudável!
 -->


<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>

        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>

        </select>
    </div>
    <button>Executar</button>

</form>

<style>
    button,
    select {
        font-size: 65%;
    }
</style>

<?php

if (isset($_POST['t1']) && isset($_POST['t2'])) {

    $t1 =  $_POST['t1'] === '1';
    $t2 =  !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 and $t2) {
        $tv = '50"';
    } elseif ($t1 xor $t2) {
        $tv = '32"';
    }

    if ($t1 or $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos Comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV dessa Vez :(";
    }

    if (!$sorvete) {
        $resultado .= '<br>Estamos Mais Saudáveis!';
    } else {
        $resultado .= '<br>Sorvete Liberado \o/';
    }

    echo "<p>$resultado</p>";
}
