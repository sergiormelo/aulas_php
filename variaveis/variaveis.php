<div class="titulo">Variáveis variáveis</div>
<?php
$a='ValorA';
$$a='ValorAA';
echo "$a {$$a} ${$a}";
$epa="opa";
$opa='vish';
$vish='eita!';
echo "<br> $epa {$$epa} {$$$epa}";