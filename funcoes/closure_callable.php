<div class="titulo">Closure Callable</div>
<?php
$soma1=function ($a,$b){
    return $a+$b;
};
echo $soma1(2,3), '<br>';
echo (is_callable($soma1) ? 'SIM' : "NÃO") . '<br>';
echo var_dump($soma1) . '<br>';
$soma1=1;
echo (is_callable($soma1) ? 'SIM' : "NÃO") . '<br>';