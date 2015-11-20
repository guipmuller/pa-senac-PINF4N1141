<div class="row" id="rodape">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <?php if ($this->session->user_logado) { ?>
            bem vindo, <?php echo $this->session->nome_usuario; ?>
            <a href="pessoas/logoff">Sair</a>
        <?php } else { ?>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Senha:</label>
                <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha">
            </div>
            <?php
            $atts = array('class' => 'btn btn-default');
            ?>
            <?php echo anchor('Admin/index', 'Login', $atts); ?>
            <?php
            if (!$this->session->userdata("usuario_logado")) {
                $atts = array('class' => 'btn btn-danger');
                echo anchor('pessoas/logoff', 'Sair', $atts);
            } else {
                $atts = array('class' => 'btn btn-danger disabled');
                echo anchor('pessoas/logoff', 'Sair', $atts);
            }
            ;
            ?>
            <button class="btn btn-danger disabled">Sair</button>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="lembrar"> Lembre-se de mim
                    </label>
                </div>
            </div>
<?php } ?>
    </div>

    <?php
    $image_properties1 = array(
        'src' => '/assets/img/rs1.png',
        'width' => '10%',
    );
    ?>
    <?php
    echo anchor('http://www.facebook.com/sacishop', img($image_properties1), [
        'target' => '_blank'
    ]);
    ?>


    <?php
    $image_properties2 = array(
        'src' => '/assets/img/rs2.png',
        'width' => '10%',
    );
    ?>
    <?php
    echo anchor('http://www.twitter.com/sacishop', img($image_properties2), [
        'target' => '_blank'
    ]);
    ?>
    <br>
    <?php
    $image_properties3 = array(
        'src' => '/assets/img/fp.png',
        'width' => '25%',
    );
    ?>
<?php echo img($image_properties3); ?>

</div>
<br>Por: Guilherme Pinto Müller
-- guilhermepmuller@gmail.com
-- &copy; 2015
<p>Página carregada em <strong>{elapsed_time}</strong> segundos. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</body>
</html>