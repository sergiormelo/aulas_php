<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois trabalhos fore executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
 -->
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button, select, label{
        font-size: 1.5rem;
    }
</style>
<?php
if(isset($_POST['t1']) && isset($_POST['t2'])){
    $q1=$_POST['t1'];
    $q2=$_POST['t2'];
    $pos1=($q1==1 && $q2==1);
    $pos2=($q1==1 && $q2==0) || ($q1==0 && $q2==1);
    $pos3=($q1==0 && $q2==0);
    if($pos1==true){
        echo "TV 50' e Sorvete" . "<br>$q1$q2 -> |pos1: $pos1|, |pos2: $pos2|, |pos3: $pos3|";
    }
    else if($pos2==true){
        echo "TV 32' e Sorvete" . "<br>$q1$q2 -> |pos1: $pos1|, |pos2: $pos2|, |pos3: $pos3|";
    }
    else if($pos3==true){
        echo "Fica em casa é mais saudável!" . "<br>$q1$q2 -> |pos1: $pos1|, |pos2: $pos2|, |pos3: $pos3|";
    }
    //exemplo mais complexo:
    // $t1=$_POST['t1']==='1';
    // $t2=$_POST['t1']==='0';
    // $tv='';
    // $sorvete=false;
    // if($t1 && $t2){
    //     $tv='50"';
    // }
    // else if($t1 xor $t2){
    //     $tv='32"';
    // }
    // if($t1 or $t2){
    //     $sorvete=true;
    // }
    // if($tv){
    //     $resultado="Vamos comprar uma TV de $tv";
    // }
    // else{
    //     $resultado="Sem TV dessa vez!";
    // }
    // $saudavel = !$sorvete;
    // if($saudavel){
    //     $resultado .= '<br>Estamos mais saudáveis!';
    // }
    // else{
    //     $resultado .= '<br>Sorvete liberado!';
    // }
    // echo "<p>$resultado</p>";
}