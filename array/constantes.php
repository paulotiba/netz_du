<div class="titulo">Arrays Constantes.</div>

<?php


const FRUTAS = [ 'laranja', 'abacaxi'];
echo FRUTAS[0];


const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES[0];
// arrays não podem ser alterados ou adcionar elementos quando for const e define:

    
