<div class="titulo">Variáveis</div>
<?php
$numA=13;
echo $numA, '<br>';
var_dump($numA);
echo '<br>';
$a=3;
$b=16;
$soma=$a+$b;
echo $soma, '<br>';
$mult=$a*$b;
echo $mult, '<br>';
echo isset($mult), '<br>';
unset($mult);
echo '<br>';
// var_dump($mult);
$var=10;
echo '<br>' . $var;
$var='Agora sou uma string';
echo '<br>' . $var;