<div class="titulo">Declarando Tipos</div>
<?php
function somar1($a,$b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar1(1,2) . '<br>';
echo somar1(1.7,2.5) . '<br>';
// echo somar1(1,'4dois') . '<br>'; | NÃO FUNCIONA NO PHP8.0 |
function somar2(int $a,int $b){ // OU ($a, $b): int
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar2(1,2) . '<br>';
echo somar2(1.7,2.5) . '<br>';
