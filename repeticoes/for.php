<div class="titulo">Laço For</div>
<?php
for($i=0; $i <= 4; $i++){
    echo "$i <br>";
}
echo "<hr>";
for(;$i <=10; $i++){
    echo "$i <br>";
}
for(;$i <= 15;){
    echo "$i <br>";
    $i++; //se não colocar o contador, vai ficar em loop.
}
$array=['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
print_r($array);
echo '<br>';
for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]} <br>";
}
$matrix=[
    ['a','e','i','o','u'],
    ['b','c','d']
];
echo "<hr>";
for($i=0;$i<count($matrix);$i++){
    for($j=0;$j<count($matrix[$i]);$j++){
        echo "{$matrix[$i][$j]} <br>";
    }
}