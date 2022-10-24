<div class="titulo">Desafio Sorteio</div>
<?php
$nomes=['Thor','Capitão América','Homem de Ferro','Cavaleiro Negro'];
$index=array_rand($nomes);
echo "<div center><h1>$nomes[$index]</h1></div>";
?>
<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>