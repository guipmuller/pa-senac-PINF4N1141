<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Senha:</label>
            <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Password">
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
    <div class="col-lg-6">
        Por: Guilherme Pinto Müller
        <br>guilhermepmuller@gmail.com
        <br>&copy; 2015
        <p>Página carregada em <strong>{elapsed_time}</strong> segundos. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        <?php
                        $image_properties1 = array(
                            'src' => '/assets/img/rs1.png',
                            'width' => '25%',
                            'href' => 'http://www.facebook.com/sacishop'
                        );
                        ?>
                        <?php echo img($image_properties1); ?>
        <?php
                        $image_properties2 = array(
                            'src' => '/assets/img/rs2.png',
                            'width' => '25%',
                            'href' => 'http://www.twitter.com/sacishop'
                        );
                        ?>
                        <?php echo img($image_properties2); ?>
    </div>
</div>
</div>
</body>
</html>