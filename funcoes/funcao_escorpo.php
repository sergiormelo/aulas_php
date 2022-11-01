<div class="titulo">Função e Escorpo</div>
<?php
function imprimir_msg(){
    echo "Olá! ";
    echo "Até a próxima!<br>";
}
imprimir_msg();
echo "<br><hr><br>";
$variavel=1;
function trocarValor(){
    $variavel=2;
    echo "Durante a função: $variavel <br>";
}
echo "Antes $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";
echo "<br><hr><br>";
function trocarValordeVdd(){
    global $variavel; //global deixa a variável global, ou seja, o valor pode ser acesso em qualquer área!!
    $variavel=3;
    echo "Durante a função: $variavel <br>";
}
echo "Antes $variavel <br>";
trocarValordeVdd();
echo "Depois: $variavel <br>";
var_dump(trocarValordeVdd());