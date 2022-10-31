<div class="titulo">While/DO While</div>
<?php
const limite=5;
$i=0;
while($i<limite){
    echo "while $i <br>";
    $i++;
}
echo "<br><hr><br>";
$i=0;
do{
    echo "do-while $i <br>";
    $i++;
}while($i<limite);