<?php
$atts = array('class' => 'btn btn-danger');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('home/index', 'Home', $atts); ?>
        <?php echo anchor('loja/produtos', 'Loja', $atts); ?>
        <?php echo anchor('carrinho/mostra', 'Carrinho', $atts); ?>
        <?php echo anchor('sobre/index', 'Sobre', $atts); ?>
    </div>
</div>
<br>