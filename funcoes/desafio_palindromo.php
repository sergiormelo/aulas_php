<div class="titulo">Desafio Palíndromo</div>
<form action="#" method="post">
    <label for="nome"></label>
    <input type="text" name="nome" id="nome">
    <button>Verificar!</button>
</form>
<?php
$n=$_POST['nome'];
function palindromo($n){ // Metodo comum!
    for($i=0;$i<strlen($n);$i++){
        if($n[$i] !== $n[(strlen($n)-1)-$i]){
            return "$n -> Não é palíndromo";
        }
    }
    return "$n -> É palíndromo";
}
echo '<br>' . palindromo($n);
function palindromoSimples($n){
    return $n === strrev($n) ? "$n -> É palíndromo" : "$n -> Não é palíndromo";
}
echo '<br>' . palindromoSimples($n);