<?php
$attsCriar = array('class' => 'btn btn-success');
$attsEditar = array('class' => 'btn btn-warning btn-xs');
$attsExcluir = array('class' => 'btn btn-danger btn-xs');
?>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
        <h2>Registro de Produtos</h2>
        <?php
        echo anchor('Produtos/novo', 'Criar', $attsCriar);
        ?>
        <ul class="lista">
            <?php
            foreach ($produtos as $produto) {
                ?>
                <li>
                    <?php echo $produto['nome']; ?> (<?php echo $produto['preco']; ?>)
                    <?php echo anchor('produtos/editar/' . $produto['idprodutos'], 'Editar', $attsEditar); ?>
                    <?php echo anchor('produtos/deletar/' . $produto['idprodutos'], 'Excluir', $attsExcluir); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>