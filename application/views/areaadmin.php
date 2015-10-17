<?php
$atts = array('class' => 'btn btn-danger');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('home/index', 'Produtos', $atts); ?>
        <br>
        <br>
        <?php echo anchor('loja/produtos', 'Clientes', $atts); ?>
    </div>
</div>
<br>