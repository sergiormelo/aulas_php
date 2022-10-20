<div class="titulo">Desafio String</div>
<?php
// Enunciado:
// Avaliando os métodos da documentação da string,
// qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

// if (mb_strpos('!AbcaBcabc', 'abc') !== false){
//     echo 'Foi possível achar o trecho abc -> ' . 1;
// }
// else{
//     echo 'Não foi possível achar o trecho abc' . 0;
// }

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';
