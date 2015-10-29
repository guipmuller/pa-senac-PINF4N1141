<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <h2>CADASTRO</h2>
        <form id="cadastro" method="post" action="<?php echo base_url('pessoas/salvar_novo') ?>">
            <div class="form-group">
                <label for="inputName">Nome Completo:</label>
                <input type="name" class="form-control" name="nome" id="textarea" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="inputName">Login:</label>
                <input type="name" class="form-control" name="login" id="textarea" placeholder="Login">
            </div>
            <div class="form-group">
                <label for="inputName">CPF:</label>
                <input type="name" class="form-control" name="cpf" id="textarea" placeholder="CPF">
            </div>
            <div class="form-group">
                <label for="inputDate">Data de Nascimento:</label>
                <input type="name" class="form-control" name="data" id="textarea" placeholder="Data de Nascimento">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Senha:</label>
                <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha">
            </div>
            <div class="form-group">
                <label for="inputPassword">Confirmar Senha:</label>
                <input type="password" class="form-control" name="confirmasenha" id="inputPassword" placeholder="Senha">
            </div>
            <h3>Endereço de entrega</h3>
            <div class="form-group">
                <label for="textarea">Endereço:</label>
                <textarea class="form-control" id="textarea" name="endereco" placeholder="Digite seu endereço completo, com logadouro, número e complemento, cidade, UF e CEP"></textarea>
            </div>
            <button class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</div>