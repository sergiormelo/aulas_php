<div class="titulo">Desafio Data</div>
<?php
class Data{
    public $dia=01;
    public $mes=01;
    public $ano=1970;
    public function apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}
$imprimi1=new Data();
$imprimi1->apresentar();
echo '<br>';
$imprimi1->dia=17;
$imprimi1->mes=11;
$imprimi1->ano=2022;
$imprimi1->apresentar();