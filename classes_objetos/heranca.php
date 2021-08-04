<div class="titulo">Herança.</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo 'Pessoa:!!Tchau!<br>';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado! <br>';   
    }

    function __destruct()
    {
        echo 'Usuario diz: Tchau!!';
        parent::__destruct();
    }

    public function apresentar() {
        echo "@{$this->login}!!! ";
        parent::apresentar();

    }
}


$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);