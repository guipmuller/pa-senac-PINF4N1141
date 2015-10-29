<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
        <h2>Registro de Produtos</h2>
        <ul>
            <?php
            $atts = array('class' => 'btn btn-success');
            ?>
            <?php echo anchor('Produtos/novo', 'Criar', $atts); ?>
            <br>
            <li>
                EXEMPLO 1
                <button class="btn btn-warning">Editar</button>
                <button class="btn btn-danger">Excluir</button>
            </li>
            <br>
            <li>
                EXEMPLO 2
                <button class="btn btn-warning">Editar</button>
                <button class="btn btn-danger">Excluir</button>
            </li>
        </ul>
    </div>
</div>