<div class="titulo">Desafio Data.</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 15;
$aniversario->mes = 5;
$aniversario->ano = 2017;
echo $aniversario->apresentar(), '<br>';

$casamento = new Data;
$casamento->dia = 21;
$casamento->mes = 1;
$casamento->ano = 1995;
echo  $aniversario->apresentar(),'<br>';