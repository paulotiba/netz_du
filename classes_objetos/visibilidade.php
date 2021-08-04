<div class="titulo">Visibilidade.</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Classe A) Publico = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmetido por herança!<br>';
    }
    private function naoMostrar() {
        echo 'Não Vou Imprimir!';
    }
}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
echo '<br>';
$b->mostrarA();