<div class="titulo">Multidimensional</div>
<?php
$dados=[ // Matriz
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];
print_r($dados);
echo '<br> <br>' . $dados[0]['idade']; // Imprime o índice -> chave
echo '<br> <br>' . $dados[1]['idade'];
$dados[]=[ // Adiciona mais um conjunto de dados (índice)
    "nome" => "Flórida",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
echo '<br> <br>';
print_r($dados);
echo '<br> <br>' . $dados[2]['idade'];
$dados[2]["Vizinho"]="Chaves"; // Adiciona a um índice uma chave com valor
echo '<br> <br>';
print_r($dados[2]);

unset($dados[1]); // Remove o elemento de índice 1
echo '<br> <br>';
print_r($dados);
echo '<br> <br>';
print_r($dados[2]);
// var_dump($dados[1]); // Gera erro, pois não existe esse índice!
