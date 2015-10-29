<?php
$atts = array('class' => 'btn btn-danger');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('Home/index', 'Home', $atts); ?>
        <?php echo anchor('Pessoas/novo', 'Quero Me Cadastrar', $atts); ?>
        <?php echo anchor('Produtos/loja', 'Loja', $atts); ?>
        <?php echo anchor('Produtos/carrinho', 'Carrinho', $atts); ?>
        <?php echo anchor('Sobre/index', 'Sobre', $atts); ?>
    </div>
</div>
<br>
<br>