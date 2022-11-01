<div class="titulo">Argumentos e Retornos</div>
<?php
function obterMsg(){
    return 'Seja Bem Vindo(a)!';
}
echo obterMsg();
$m=obterMsg();
echo "<br>$m<br>";
var_dump(obterMsg());
function obterMsgCNome($nome){
    return "Bem vindo, {$nome}!";
}
echo '<br>', obterMsgCNome('Wagner');
echo '<br>', obterMsgCNome('Tiago');
function soma($a,$b){
    return $a+$b;
}
$x=10; $y=17;
echo '<br> Resultado da soma -> ', soma(4,5);
echo '<br> Resultado da soma -> ', soma($x,$y);
function trocarValor($a,$newValor){
    $a=$newValor;
}
$variavel=1;
trocarValor($variavel, 3);
echo"<br>Resultado Trocar de Valor -> $variavel";
function trocarValor2($a,$newValor){
    $a=$newValor;
    return $a;
}
echo"<br>Resultado Trocar de Valor -> " . trocarValor2($variavel, 8);
function trocarValorEnd(&$a, $novoValor){
    $a=$novoValor;
}
trocarValorEnd($variavel, 5000);
echo '<br>Atribuindo valor a endereço -> ', $variavel;