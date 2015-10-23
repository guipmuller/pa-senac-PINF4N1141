<br>
<br>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Senha:</label>
            <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Senha">
        </div>
        <button class="btn btn-danger">Login</button>
        <button class="btn btn-danger disabled">Sair</button>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="lembrar"> Lembre-se de mim
                </label>
            </div>
        </div>

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