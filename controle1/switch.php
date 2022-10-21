<div class="titulo">Switch</div>
<?php
$categoria='Luxo';
$preço=0.0;
$carro='';
if($categoria==='Luxo'){
    $carro='Mercedes';
    $preço=250000;
}
elseif($categoria==='SUV'){
    $carro='Renegade';
    $preço=80000;
}
elseif($categoria==='Sedan'){
    $carro='Etios';
    $preço=55000;
}
else{
    $carro='Mobi';
    $preço=33000;
}
$precoFormatado = number_format($preço, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
$categoria ='sedan';
switch(strtolower($categoria)){
    case 'luxo':
        $carro='Mercedes';
        $preco=250000;
        break;
    case 'suv':
    case 'suv básico':
        $carro='Etios';
        $preco=80000;
        break;
    case 'sedan':
        $carro='Etios';
        $preco=55000;
        break;
    default: //else
        $carro='Mobi';
        $preco=33000;
        break;
}
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";