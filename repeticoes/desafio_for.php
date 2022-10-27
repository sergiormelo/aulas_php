<div class="titulo">Desafio For</div>
<!-- 
    #
    ##
    ###
    ####
    #####

 -->
 <?php
$g='#';
 for($i=0;$i<=5;$i++){
    echo "$g <br>";
    $g=$g.'#';
 }
 for($g='#';$g!=='######';$g.='#'){
    echo "$g <br>";
 }