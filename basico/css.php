<div class="titulo">Integração HTML</div>
<h1 center><?php echo 'Olá <small>Mundo!</small>' ?></h1>
<?= '<div center azul>Exemplo de DIV dentro do HTML</div>' ?>
<br>
<div center><button dobro><?= 'Legal' ?></button></div>
<style>
    button{
        padding: 8px <?= 2*10+5?>px;
        background-color: #4286f4;
        color:#EEE;
        font-weight: 400;
        border-radius: 0.5rem;
        border: none;
        font-size: 1.2rem;
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>