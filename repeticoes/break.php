<div class="titulo">Break / Continue</div>
<?php
$i=10;
for(;;){
    echo "$i<br>";
    $i++;
    if($i>20){
        break;
    }
}
echo "<br><hr><br>";
for(;;){
    $i++;
    if($i%2 == 1){
        continue;
    }
    echo "$i <br>";
    if($i>=30){
        break;
    }
}
echo "<br><hr><br>";
foreach(array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;
    if($valor%2 === 0) continue;
    echo "$valor <br>";
}
echo 'FIM!';