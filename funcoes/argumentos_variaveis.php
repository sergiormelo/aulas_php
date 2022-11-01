<div class="titulo">Argumentos Variáveis</div>
<?php
function soma($a,$b){
    return $a+$b;
}
echo soma(10,20) . '<br>';
echo soma(6,5) . '<br>';
function somaCompleta(...$numeros){ //aceita vários números ou valores (inclusive arrays);
    $som=0;
    foreach($numeros as $num){
        $som += $num;
    }
    return $som;
}
echo somaCompleta(1,2,3,4,5,6);
$array=[7,8,9,10];
echo '<br>Soma com array -> ' . somaCompleta(...$array);
