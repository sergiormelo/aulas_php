<div class="titulo">Traits 01</div>
<?php
trait validacao{
    public $a='Valor a';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}
trait validarMelhor{
    public $b='Valor b';
    private $c='Valor privado';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
        // função 'trim' verifica se a entrada só tem vazios!
    }
}
class Usuario{
    use validacao, validarMelhor;
    public function imprimirValorC(){
        echo '<br>', $this->c;
    }
}
// var_dump(validacao->validarString(' '));
$usuario=new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor('  '));
echo '<br>';
echo $usuario->a, '<br>',$usuario->b, $usuario->imprimirValorC();