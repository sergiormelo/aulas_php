<div class="titulo">Array Constante</div>
<?php
const FRUTAS=array('laranja','abacaxi');
// FRUTAS[0]='banana'; // Não funciona, pois o array é uma constante!
// FRUTAS[]='banana';
echo FRUTAS[0];
const CARROS=['Fiat' => 'Uno', 'Ford' => 'Fiesta'];
// CARROS['BMW']='325i'; // Não funciona, pois o array é uma constante!
echo '<br>' . CARROS["Fiat"];
// echo '<br>' . CARROS['Fiat'];
define('CIDADES', array('Belo Horizonte','Recife')); // Outra forma de definir constantes -> primeiro elemento é o nome da constate e o segundo é o valor atribuido a ela!
// CIDADES[]='Rio de Janeiro'; //Não funciona, porque é uma constante!
