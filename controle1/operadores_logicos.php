<div class="titulo">Operadores Lógicos</div>
<?php
echo '<p>V ou F</p><hr>';
var_dump(true);
echo '<br>';
var_dump(!true); //not
echo "<p> Tabela Verdade 'AND' (E)</p><hr>";
echo '<br>' . var_dump(true && true);
echo '<br>' . var_dump(true && false);
echo '<br>' . var_dump(false && true);
echo '<br>' . var_dump(false && false);
// AND com outro operador:
echo '<br>' . var_dump(true and true);
echo '<br>' . var_dump(true and false);
echo '<br>' . var_dump(false and true);
echo '<br>' . var_dump(false and false);
echo "<p> Tabela Verdade 'OR' (E)</p><hr>";
echo '<br>' . var_dump(true || true);
echo '<br>' . var_dump(true || false);
echo '<br>' . var_dump(false || true);
echo '<br>' . var_dump(false || false);
// OR com outro operador:
echo '<br>' . var_dump(true or true);
echo '<br>' . var_dump(true or false);
echo '<br>' . var_dump(false or true);
echo '<br>' . var_dump(false or false);
echo "<p> Tabela Verdade 'XOR' (E)</p><hr>";
echo '<br>' . var_dump(true xor true);
echo '<br>' . var_dump(true xor false);
echo '<br>' . var_dump(false xor true);
echo '<br>' . var_dump(false xor false);
?>
<style>
    p{
        margin-bottom: -0.5rem;
        font-weight: bold;
    }
    hr{
        margin-bottom: 0rem;
    }
</style>