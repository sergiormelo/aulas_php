<div class="titulo">Interface</div>
<?php
interface Animal{
    function respirar();
}
interface Canino{
    // As funções (métodos) são públicas por padrão na interface!
    function latir();
}
class Cachorro implements Animal{
    function respirar(){
        echo "Irei usar oxigênio!<br>";
    }
    function latir(): string{
        return "au au";
    }
}
$animal1= new Cachorro();
$animal1->respirar();
echo $animal1->latir(), '<br>';

echo 'Fim';