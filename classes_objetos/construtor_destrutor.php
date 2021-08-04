<div class="titulo">Construtor e Destrutor.</div>

<?php

class Pessoa { 
    public $nome;
    public $idade;

    function __construct($novonome, $idade = 18) {
        echo 'Construtor invocado! <br>';
        $this->nome = $novonome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!<hr>';    
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Rebeca Maria');
$pessoa->apresentar();
unset($pessoa);


$pessoaA = new Pessoa('Paulo', 23);
$pessoaA->apresentar();
$pessoaA = null;

// modificador de acesso são três : public, protected, private.
// pilares  
// 01 -> encapsulamento 
// 02 -> herança 
// 03 -> polimorfismo 
// 04 -> abstração
