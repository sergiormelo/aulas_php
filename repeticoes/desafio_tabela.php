<div class="titulo">Desafio Tabela</div>
<?php
    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20'],
];
echo "<table>";
$i=0;
foreach($matriz as $linha){
    if($i%2===1) echo "<tr style='background-color:orange;'>"; 
    else echo "<tr>";
    foreach($linha as $coluna){
        echo "<td>$coluna</td>";
    }
    echo "</tr>";
    $i++;
}
echo "</table>";
// Outra forma de fazer!
echo "<table>";
foreach($matriz as $id => $linha){
    $style=$id%2===0 ? 'background-color:lightblue;' : ''; 
    echo "<tr style='{$style}'>";
    foreach($linha as $coluna){
        echo "<td>$coluna</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<style>
    table{
        border:1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding:10px 20px;
    }
</style>