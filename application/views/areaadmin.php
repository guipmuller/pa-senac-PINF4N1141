<?php
$atts = array('class' => 'btn btn-default');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('admin/produtos', 'Cadastro de Produtos', $atts); ?>
        <br>
        <br>
        <?php echo anchor('admin/clientes', 'Cadastro de Clientes', $atts); ?>
    </div>
</div>