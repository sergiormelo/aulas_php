<div class="title">Atribuições</div>
<?php
$title='Atribuições';
$num= 10;
echo '<br>' . $num;
$num= $num - 3;
echo '<br>' . $num;
echo '<br>' . $num= $num + 1.5;
$num--;
echo '<br>' . $num;
$num++;
echo '<br>' . $num;
$num-=5;
echo '<br>' . $num;
$num+=5;
echo '<br>' . $num;
$num*=3;
echo '<br>' . $num;
$num/=4;
echo '<br>' . $num;
$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;
$variavelexistente = 'Valor existente';
echo '<br>' . $variavelexistente;
$valor = $variavelexistente ?? 'Valor default';
echo '<br>' . $valor;