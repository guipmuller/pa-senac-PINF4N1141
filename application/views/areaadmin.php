<div class="row" id="areadmin">
    <div class="col-lg-12">
        <?php
        $atts = array('class' => 'btn btn-default');
        ?>
        <?php echo anchor('produtos/lista', 'Cadastro de Produtos', $atts); ?>
        <br>
        <br>
        <?php echo anchor('pessoas/lista', 'Cadastro de Clientes', $atts); ?>
    </div>
</div>