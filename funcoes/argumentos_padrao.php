<div class="titulo">Argumentos Padrão</div>
<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}
echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL,NULL);
echo saudacao("Mestre", "Supremo");
function anotarPedido($comida, $bebida='Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}
anotarPedido('Hamburger');
anotarPedido('Hamburger','Refrigerante');
// function anotarPedido2($bebida='Água', $comida){  //| Esta parte do código está depreciada no php8.0! |
//     if($bebida==null) $bebida='Água';
//     echo "Para comer: $comida <br>";
//     echo "Para beber: $bebida <br>";
// }
// // anotarPedido2('Hamburger');
// anotarPedido2('Refigerante2','Hamburger');