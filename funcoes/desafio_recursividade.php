<div class="titulo">Desafio Recursividade</div>
<?php
$array=[1,2,[3,4,5],6,[7,[8,9]],10];
function imprimirArray($array, $nivel = '>'){
    foreach($array as $elemento){ //for de elemento por elemento
        if(is_array($elemento)){ // veirifica se é elemento
            imprimirArray($elemento, $nivel . $nivel[0]); //adiciona ">" a cada array encontrado
        }
        else{
            echo "$nivel $elemento<br>";
        }
    }
}
imprimirArray($array);
imprimirArray($array, "-");