<div class="titulo">$_POST</div>
<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
    </select>
    <button>Enviar</button>
</form>
<style>
    form > * {
        font-size: 1.5rem;
    }
</style>
<?php
print_r($_GET);
echo '<br>';
print_r($_POST);