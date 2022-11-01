<div class="titulo">Desafio Tabela 2</div>
<form action="#" method="post">
    <div>
        <label for="linhas">Número de linhas:</label>
        <input type="number" name="linhas" id="linhas" value=<?= $_POST['linhas'] ?? 10 ?>>
    </div>
    <div>
        <label for="colunas">Número de colunas:</label>
        <input type="number" name="colunas" id="colunas" value=<?= $_POST['colunas'] ?? 10 ?>>
    </div>
    <button>Criar Tabela</button>
</form>
<style>
    button, select, label{
        font-size: 1.5rem;
    }
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
<?php
if(isset($_POST['linhas']) && isset($_POST['colunas'])){
    // echo "$_POST[linhas] $_POST[colunas]";
    $l=intval($_POST['linhas']);
    $c=intval($_POST['colunas']);
    if(!$l) $l=10;
    if(!$c) $c=10;
    echo "<table>";
    $num=0;
    for($i=0;$i<$l;$i++){
    if($i%2===1) echo "<tr style='background-color:orange;'>"; 
    else echo "<tr>";
    for($j=0;$j<$c;$j++){
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
    }
    echo "</table>";
}