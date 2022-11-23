<div class="titulo">Métodos Mágicos</div>
<?php
class Pessoa{
    public $nome;
    public $idade;
    function __construct($nome,$idade){
        echo 'Construtor invocado!<br>';
        $this->nome=$nome;
        $this->idade=$idade;
    }
    function __destruct(){
        echo '<br>E morreu!';
    }
    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }
    public function apresentar(){
        echo $this . '<br>';
    }
    public function __get($atrib){
        // Ler e exibe qualquer valor não determinado antes!
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }
    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib} -> ";
    }
    public function __call($metodo, $params){
        echo "Tentando executar método ${metodo},";
        echo " com os parametros: ";
        print_r($params);
    }
}
$pessoa=new Pessoa('Ricardo',40);
$pessoa->apresentar(); // __toString
echo $pessoa,'<br>';   // __toString
$pessoa->nome='José';
$pessoa->apresentar(); // __toString
echo $pessoa->nomeCompleto; // __set
echo $pessoa->nomeCompleto='Muito Legal';
$pessoa->nomeCompleto; // __get
$pessoa->nome;         // Passando o atributo sem o __get
echo '<br>', $pessoa->exec(1, 'teste', true, [1,2,3]); // __call
$pessoa=null;