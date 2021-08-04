<div class="titulo">Menbros Estáticos.</div>

<?php

use A as GlobalA;

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // tentativa 1
        // echo "Estática = {$this->static}<br>";
        // tentativa 2
        //  echo "Estática = {self::$static}  <br>";
        // tentativa 3
        echo "Estática = " . self::$static . "<br>";
    }
    
    public static function mostrarStatica() {
        echo "Estática = " . self::$static . "<br>";

    }
}

$objeto = new A();
$objeto->mostrarA();
$objeto->mostrarStatica();//não e forma ideal!
echo '<br>';

echo A::$static, '<br>';// acessar diretamente pela classe
A::mostrarStatica(); // acessar diretamente pela classe

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>';// acessar diretamente pela classe