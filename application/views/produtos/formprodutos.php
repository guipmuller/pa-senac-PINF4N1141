<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h1>Cadastro de Produto</h1>
        <form id="cadastro" method="post" action="<?php echo base_url(isset($produto[0]['idprodutos']) ? 'produtos/atualizar' : 'produtos/salvar_novo') ?>">
            <input type="hidden" name="id" value="<?php echo (isset($produto[0]['idprodutos']) ? $produto[0]['idprodutos'] : '') ?>">
            <div class="form-group">
                <label for="inputName">Nome:</label>
                <input type="name" class="form-control" name="nome" id="textarea" placeholder="Nome" value="<?php echo (isset($produto[0]['nome']) ? $produto[0]['nome'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Preço:</label>
                <input type="name" class="form-control" name="preco" id="textarea" placeholder="Preço" value="<?php echo (isset($produto[0]['preco']) ? $produto[0]['preco'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="textarea">Descrição:</label>
                <textarea class="form-control" id="textarea" name="descricao" placeholder="Descrição do produto" value="<?php echo (isset($produto[0]['descricao']) ? $produto[0]['descricao'] : '') ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="filebutton">Enviar Imagem</label>
                <input id="filebutton" name="imagem" class="input-file" type="file" value="<?php echo (isset($produto[0]['imagem']) ? $produto[0]['imagem'] : '') ?>">
            </div>
            <button class="btn btn-success"><?php echo (isset($produto[0]['idprodutos']) ? 'Atualizar' : 'Cadastrar') ?> Produto</button>
        </form>
    </div>
</div>

