<div class="titulo">Desafio Switch.</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-Km">Milha > Km</option>
        <option value="metro-Km">metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>


<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;


$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-Km';
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-Km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;

    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° Celsius = {$conversao}°Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
        break;


    default:
        $mensagem = "Nenhum Valor Calculado!!";
}

echo "<p>$mensagem</p>";
