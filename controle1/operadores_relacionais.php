<div class="titulo">Operadores Relacionais I</div>
<?php
echo '<br>' . var_dump(1 == 1);
echo '<br>' . var_dump(1 > 1);
echo '<br>' . var_dump(1 >= 1);
echo '<br>' . var_dump(1 <= 1);
echo '<br>' . var_dump(1 != 1);
echo '<br>' . var_dump(1 <> 1);
echo '<br>' . var_dump(11==='11'); //falso porque ta comparando também o tipo de string
echo '<br>' . var_dump(11!=='11'); //verdadeiro porque ta comparando também o tipo de string
echo '<p>Relacionais no If/Else</p><hr>';
$idade=25;
if($idade<18){
    echo "Menor de idade = $idade<br>";
}
else if($idade<65){
    echo "Adulto = $idade<br>";
}
else{
    echo "Terceira idade = $idade<br>";
}
echo '<p>Spaceship</p><hr>';
echo '<br>' .var_dump(500 <=> 3); // Se o operando da esquerda for maior que o da direita (1)
echo '<br>' .var_dump(50 <=> 50); // Se o operando da esquerda for igual o da direita (0)
echo '<br>' .var_dump(5 <=> 50); // Se o operando da direita for maior que o da esquerda (-1)
echo '<p>Valores pode ser V ou F</p><hr>';
echo '<br>' . var_dump(!!5);
echo '<br>' . var_dump(!!0);
echo '<br>' . var_dump(!!"");
echo '<br>' . var_dump(!!" ");
?>
<style>
    p{
        margin-bottom: -0.5rem;
    }
    hr{
        margin-bottom: 0rem;
    }
</style>