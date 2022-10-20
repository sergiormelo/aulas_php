<div class="titulo">Operadores Lógicos</div>
<?php
echo '<p>V ou F</p><hr>';
var_dump(true);
echo '<br>';
var_dump(!true); //not
echo "<p class=divisao>> Tabela Verdade 'AND' (E)</p><hr>";
echo '<br>' . var_dump(true && true);
echo '<br>' . var_dump(true && false);
echo '<br>' . var_dump(false && true);
echo '<br>' . var_dump(false && false);
// AND com outro operador:
echo '<i>AND com outro operador:</i><br>';
echo '<br>' . var_dump(true and true);
echo '<br>' . var_dump(true and false);
echo '<br>' . var_dump(false and true);
echo '<br>' . var_dump(false and false);
echo "<p class=divisao>> Tabela Verdade 'OR' (E)</p><hr>";
echo '<br>' . var_dump(true || true);
echo '<br>' . var_dump(true || false);
echo '<br>' . var_dump(false || true);
echo '<br>' . var_dump(false || false);
// OR com outro operador:
echo '<i>OR com outro operador:</i><br>';
echo '<br>' . var_dump(true or true);
echo '<br>' . var_dump(true or false);
echo '<br>' . var_dump(false or true);
echo '<br>' . var_dump(false or false);
echo "<p class=divisao> Tabela Verdade 'XOR' (E)</p><hr>";
echo '<br>' . var_dump(true xor true);
echo '<br>' . var_dump(true xor false);
echo '<br>' . var_dump(false xor true);
echo '<br>' . var_dump(false xor false);
// XOR com outro operador:
echo '<i>XOR com outro operador:</i><br>';
echo '<br>' . var_dump(true xor true);
echo '<br>' . var_dump(true xor false);
echo '<br>' . var_dump(false xor true);
echo '<br>' . var_dump(false xor false);
echo "<p class='divisao'>Exemplo:</p><hr>";
$idade=62;
$sexo='F';
if($idade>=60 && $sexo==='F'){
    echo "Pode se aposentar --> $sexo";
}
else if($idade>=65 && $sexo==='M'){
    echo "Pode se aposentar --> $sexo";
}
else {
    echo "Vai ter que trabalhar mais um pouco...";
}
?>