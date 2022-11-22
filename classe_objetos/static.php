<div class="titulo">Membros Estáticos</div>
<?php
class A{
    public $naoStatic='Variável de instância';
    public static $static = 'Váriável de classe';
    public function mostraA(){
        echo "Não estática = {$this->naoStatic}<br>";
        echo "Não estática = " . self::$static . "<br>";
    }
    public static function mostraStaticA(){
        // Não dá para exibir função não estática em funções
        // estáticas!
        echo "Não estática = " . self::$static . "<br>";
    }
}
$objetoA= new A();
$objetoA->mostraA();
//Forma adaptada de acessar classe!
$objetoA-> mostraStaticA();
//Forma correta de acessar classe!
A::mostraStaticA();
//Alterando a classe.
A::$static='Alterado membro de classe!';
echo A::$static, '<br>';