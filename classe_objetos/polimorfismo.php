<div class="titulo">Polimorfismo</div>
<?php
abstract class Comida{
    public $peso;
}
class Arroz extends Comida{

}
class Feijao extends Comida{

}
class Sorvete extends Comida{

}
class Pessoa{
    public $peso;
    function __construct($peso){
        $this->peso=$peso;
    }
    public function comer(Comida $comida){ //pode-se usar o nome da classe extendida, mas só será considerada a classe extendida!
        $this->peso +=$comida->peso;
    }
}
$c1=new Arroz();
$c1->peso=0.65;
$c2=new Sorvete();
$c2->peso=0.8;
$p=new Pessoa(83.45);
echo $p->comer($c1);
echo $p->comer($c2);
echo $p->peso;