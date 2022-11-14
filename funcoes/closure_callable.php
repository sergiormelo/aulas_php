<div class="titulo">Closure Callable</div>
<?php
$soma1=function ($a,$b){
    return $a+$b;
};
function soma2($a,$b){
    return $a+$b;
}
echo $soma1(2,3) . ' ';
echo (is_callable($soma1) ? 'SIM' : "NÃO") . '<br>';
echo soma2(2,3) . ' ';
echo (is_callable(soma2(1,2)) ? 'SIM' : "NÃO") . '<br>';
echo var_dump($soma1) . '<br>';
function executar($a, $b, $op, callable $funcao){
    $res=$funcao($a,$b) ?? 'Nada';
    echo "$a $op $b = $res<br>";
}
executar(2,3,'+',$soma1);