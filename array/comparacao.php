<div class="titulo">Comparação Array</div>
<?php
$arr1=['nome' => 'Maria', 'idade' => 20];
$arr2=['nome' => 'Maria', 'idade' => 20];
var_dump($arr1);
echo '<br>';
var_dump($arr2);
$arr3=['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3);
echo '<br>';
var_dump($arr1 === $arr3);
$arr4=['idade' => '20', 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr4);
echo '<br>';
var_dump($arr1 === $arr4); // Falso, porque o 20 não é um inteiro!