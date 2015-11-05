<?php
$attsCriar = array('class' => 'btn btn-success');
$attsEditar = array('class' => 'btn btn-warning btn-xs');
$attsExcluir = array('class' => 'btn btn-danger btn-xs');
?>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
        <h2>Registro de Pessoas</h2>
        <?php
        echo anchor('Pessoas/novo', 'Criar', $attsCriar);
        ?>
        <ul class="lista">
            <?php foreach ($pessoas as $pessoa) { ?>
                <li>
                    <?php echo $pessoa['nome']; ?> (<?php echo $pessoa['email']; ?>)
                    <?php echo anchor('pessoas/editar/' . $pessoa['id'], 'Editar', $attsEditar); ?>
                    <?php echo anchor('pessoas/excluir/' . $pessoa['id'], 'Excluir', $attsExcluir); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>