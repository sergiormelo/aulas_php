<div class="titulo">Desafio PHP</div>
<ul>
    <li>1 + 1 = ?</li>
    <li>4 + 4 = ?</li>
    <li>8 + 8 = ?</li>
</ul>
<ul>
    <li>1 + 1 = <?php echo 1+1; ?></li>
    <li>4 + 4 = <?= 4+4 ?></li>
    <?php echo '<li>8 + 8 = ' . 8+8 . '</li>'; ?>
</ul>