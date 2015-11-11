<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h1>Cadastro de Produto</h1>
        <form id="cadastro" method="post" action="<?php echo base_url(isset($produto['id']) ? 'produtos/atualizar' : 'produtos/salvar_novo') ?>">
            <div class="form-group">
                <label for="inputName">Nome:</label>
                <input type="name" class="form-control" name="nome" id="textarea" placeholder="Nome" value="<?php
                if (isset($produto['nome'])) {
                    echo $produto['nome'];
                }
                ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Preço:</label>
                <input type="name" class="form-control" name="preco" id="textarea" placeholder="Preço" value="<?php echo (isset($produto['preco']) ? $produto['preco'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="textarea">Descrição:</label>
                <textarea class="form-control" id="textarea" name="descricao" placeholder="Descrição do produto"></textarea>
            </div>
            <div class="form-group">
                <label for="filebutton">Enviar Imagem</label>
                <input id="filebutton" name="imagem" class="input-file" type="file">
            </div>
            <button class="btn btn-success"><?php echo (isset($produto['id']) ? 'Atualizar' : 'Cadastrar') ?> Produto</button>
        </form>
    </div>
</div>

