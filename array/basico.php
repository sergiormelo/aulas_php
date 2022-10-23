<div class="titulo">Array</div>
<?php
$lista=array(1,2,3,4,"texto");
// echo $lista . '<br>'; // Não funciona, dá erro!
var_dump($lista); //imprime lista
print_r($lista); //imprime lista de maneira mais organizada!
echo '<br>' . $lista[0]; //Posso imprimir todos os índices em um For!
$texto='Esse é um texto de teste!';
echo '<br>' . $texto[0]; //Retorna posições da letras dentro do array.
