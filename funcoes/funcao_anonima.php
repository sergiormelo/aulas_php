<div class="titulo">Função Anônima</div>
<?php
$soma=function($a,$b){return $a+$b;};
echo $soma(1,2), '<br>';
function executar($a,$b,$op,$funcao){
    $res=$funcao($a,$b);
    echo "$a $op $b = $res<br>";
}
executar(2,3,'+',$soma);
$multi=function($a,$b){
    return $a*$b;
};
executar(2,3,'*',$multi);
// function divisao($a,$b){return $a/$b;}; | NÃO FUNCIONA NO PHP8.0 |
// executar(9,3,'/',divisao);
$div=function ($a,$b){return $a/$b;};
executar(9,3,'/',$div);