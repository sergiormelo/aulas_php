<div class="titulo">Visibilidade</div>
<?php
class A {
    public $publico='Público';
    protected $protegido='Protegido';
    private $privado='Privado';
    public function mostrarA(){
        echo "Class A) Público = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }
    protected function vaiPorHeranca(){
        echo 'Serei transmitido por herança!<br>';
    }
    private function naoMostrar(){
        echo 'Não vou imprimir!';
    }
}
$a=new A();
$a->mostrarA();
// Não executará por ser privada! Poderia se ela estivesse
// sendo chamada na função pública.
// $a->naoMostrar();
class B extends A{
    public function mostrarB(){
        echo "Class B) Público = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        // Privado não é passado por herança!
        // echo "Class B) Privado = {$this->privado}<br>";
        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b=new B();
// Posso mostrar tanto A quanto B.
$b->mostrarB();
echo 'FIM!';