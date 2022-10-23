<div class="titulo">Operações</div>
<?php
$dados1=[
    "nome" => "Jose",
    "idade" => 28
];
$dados2=[
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];
$dadosCompletos=$dados2+$dados1; //O dado do ID nome do segundo array vai substituir o primeiro
print_r($dadosCompletos);
echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);
echo '<br>';
$indice=array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo "<br>${dadosCompletos['idade']}";
$impares=array(1,3,5,7,9);
$pares=array(0,2,4,6,8);
$decimais=$pares+$impares; //substitui o $impares por $pares
echo '<br>';
print_r($decimais);
$decimais=array_merge($pares,$impares); // uni os dois, só que um atrás do outro.
echo '<br>';
print_r($decimais);
sort($decimais); // coloca na ordem correta
echo '<br>';
print_r($decimais);
