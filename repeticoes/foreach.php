<div class="titulo">Foreach</div>
<?php
$array=['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
foreach($array as $valor){
    echo "$valor <br>";
}
foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}
$matrix=[
    ['a','e','i','o','u'],
    ['b','c','d']
];
foreach($matrix as $linha){
    foreach($linha as $letras){
        echo "$letras";
    }
    echo "<br>";
}
$num=[1,2,3,4,5];
foreach($num as &$dobrar){ //pegando o endereço da variável. Assim o resultado do array ficará com novos valores!!
    $dobrar *=2; //dobrar=dobrar*2
    echo "$dobrar <br>";
}
print_r($num);