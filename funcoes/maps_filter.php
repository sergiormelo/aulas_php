<div class="titulo">Maps e Filter</div>
<?php
$notas=[5.8,7.3,9.8,6.7];
$notasFinais1=[];
foreach($notas as $nota){
    $notasFinais1[]=round($nota);
}
print_r($notasFinais1);
echo '<br>';
$notasFinais2=array_map('round', $notas); //Cumpre a mesma função do foreach anterior!
print_r($notasFinais2);

$Aprovados1=[];
foreach($notas as $nota){
    if($nota >= 7){
        $Aprovados1[]=$nota;
    }
}
echo '<br>';
print_r($Aprovados1);

function aprovador($nota){
    return $nota >= 7;
}
echo '<br>';
$Aprovados2=array_filter($notas, 'aprovador');
print_r($Aprovados2);

function bonus($nota){
    $notaFinal=round($nota) + 1;
    return $notaFinal >10 ? 10 : $notaFinal;
}
echo '<br>';
$Aprovados3=array_map('bonus',$notas);
print_r($Aprovados3);