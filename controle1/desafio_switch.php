<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km >> Milha</option>
        <option value="milha-km">Milha >> Km</option>
        <option value="metro-km">Metros >> Km</option>
        <option value="km-metro">Km >> Metros</option>
        <option value="c-fh">Celsius >> Fahrenheit</option>
        <option value="fh-c">Fahrenheit >> Celsius</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    form > *{
        font-size: 1.5rem;
    }
</style>
<?php
if(isset($_POST['conversao']) && isset($_POST['param'])){
    echo $_POST['param'] . ' | ';
    echo $_POST['conversao'];
    $op=$_POST['conversao'];
    $valor=$_POST['param'];
    switch($op){
        case 'km-milha':
            $res=$valor*0.621371;
            $unid='Mi';
            break;
        case 'milha-km':
            $res=$valor/0.621371;
            $unid='Km';
            break;
        case 'metro-km':
            $res=$valor/1000;
            $unid='Km';
            break;
        case 'km-metro':
            $res=$valor*1000;
            $unid='m';
            break;
        case 'c-fh':
            $res=($valor*(9/5))+32;
            $unid='°F';
            break;
        case 'fh-c':
            $res=($valor-32)/(9/5);
            $unid='°C';
            break;
    }
    echo "<br>Valor da conversão: $res $unid!";
}