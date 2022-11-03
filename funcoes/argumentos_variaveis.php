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
function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}
echo '<br>', membros("Ana Silva", "Pedro", "Rafaela", "Amanda");
echo '<br>', membros("José", "Tiago", "João");