<div class="titulo">Variável vs Referência</div>
<?php
$variavel='valor inicial';
echo $variavel;
$variavelValor=$variavel;
echo '<br>' . $variavelValor;
$variavelValor='novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";

//Por Referência
$variavelReferencia=&$variavel;
$variavelReferencia='mesma referência';
echo "<br>$variavel";
echo "<br>$variavelReferencia";