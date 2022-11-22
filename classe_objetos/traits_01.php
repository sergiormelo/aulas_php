<div class="titulo">Traits 01</div>
<?php
trait validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}
trait validarMelhor{
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}
class Usuario{
    use validacao, validarMelhor;
}
var_dump(validacao->validarString(''));