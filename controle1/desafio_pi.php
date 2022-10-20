<div class="titulo">Desafio Pi</div>
<?php
echo pi();
$pi=3.14;
if($pi<=pi()){
    echo "<br>Iguais!";
}
else{
    echo "<br>Diferentes!";
}
$resto=pi()-$pi;
if($pi+$resto == pi()){
    echo "<br>Iguais!";
}
else{
    echo "<br>Diferentes!";
}