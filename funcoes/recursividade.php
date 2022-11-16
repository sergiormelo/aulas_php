<div class="titulo">Recursividade</div>
<?php
$valor=10;$r=1;
for($i=1;$i<$valor;$i++){
    $r=$r*($i+1);
    // echo "$r<br>";
}
echo "$r<br>";
function somarecursiva($num){
    $r=1;
    for($i=1;$i<$num;$i++){
        $r=$r*($i+1);
    }
    return $r;
}
echo somarecursiva(15);