<?php
$atts = array('class' => 'btn btn-info');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('loja/produtos', 'Produtos', $atts); ?>
        <br>
        <br>
        <?php echo anchor('home/index', 'Clientes', $atts); ?>
    </div>
</div>