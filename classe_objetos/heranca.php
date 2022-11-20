<div class="titulo">Herança</div>
<?php
//Classe
class Pessoa{
    public $nome;
    public $idade;
    function __construct($novoNome, $idade){
        $this->nome=$novoNome;
        $this->idade=$idade;
        echo "Pesssoa Criada! <br>";
    }
    function __destruct(){
        echo "Pessoa diz: Tchau!!";
    }
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}
//Subclasse
class Usuario extends Pessoa{
    public $login;
    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'Usuário Criado!<br>';        
    }
    function __destruct(){
        echo 'Usuário diz: Tchau!!<br>';
        //Posso chamar também o destrutor da classe Pessoa!
        parent::__destruct();
    }
    public function apresentar(){
        // Maneira 1!
        // echo "@{$this->login}: {$this->nome}, {$this->idade} anos.<br>";
        // Maneira 2!
        echo "@{$this->login}: ";
        // Chamar a função apresentar da classe Pessoa.
        parent::apresentar();
    }
}
$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);