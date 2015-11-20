<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h1>Cadastro de Clientes</h1>
        <form id="cadastro" method="post" action="<?php echo base_url(isset($pessoa[0]['idpessoas']) ? 'pessoas/atualizar' : 'pessoas/salvar_novo') ?>">
            <input type="hidden" name="id" value="<?php echo (isset($pessoa[0]['idpessoas']) ? $pessoa[0]['idpessoas'] : '') ?>">
            <div class="form-group">
                <label for="inputName">Nome Completo:</label>
                <input type="name" class="form-control" name="nome" id="textarea" placeholder="Nome" value="<?php echo (isset($pessoa[0]['nome']) ? $pessoa[0]['nome'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">Login:</label>
                <input type="name" class="form-control" name="login" id="textarea" placeholder="Login" value="<?php echo (isset($pessoa[0]['login']) ? $pessoa[0]['login'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputName">CPF:</label>
                <input type="name" class="form-control" name="cpf" id="textarea" placeholder="CPF" value="<?php echo (isset($pessoa[0]['cpf']) ? $pessoa[0]['cpf'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputDate">Data de Nascimento:</label>
                <input type="name" class="form-control" name="data" id="textarea" placeholder="Data de Nascimento" value="<?php echo (isset($pessoa[0]['data']) ? $pessoa[0]['data'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="<?php echo (isset($pessoa[0]['email']) ? $pessoa[0]['email'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Senha:</label>
                <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha" value="<?php echo (isset($pessoa[0]['senha']) ? $pessoa[0]['senha'] : '') ?>">
            </div>
            <div class="form-group">
                <label for="inputPassword">Confirmar Senha:</label>
                <input type="password" class="form-control" name="confirmasenha" id="inputPassword" placeholder="Confirme a Senha" value="<?php echo (isset($pessoa[0]['senha']) ? $pessoa[0]['senha'] : '') ?>">
            </div>
            <h3>Endereço de entrega</h3>
            <div class="form-group">
                <label for="textarea">Endereço:</label>
                <textarea class="form-control" id="textarea" name="endereco" placeholder="Digite seu endereço completo, com logadouro, número e complemento, cidade, UF e CEP" value="<?php echo (isset($pessoa[0]['endereco']) ? $pessoa[0]['endereco'] : '') ?>"></textarea>
            </div>
            <button class="btn btn-success"><?php echo (isset($pessoa[0]['idpessoas']) ? 'Atualizar' : 'Cadastrar') ?> Pessoa</button>
        </form>
    </div>
</div>