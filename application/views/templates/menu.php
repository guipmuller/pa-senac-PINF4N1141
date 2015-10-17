<?php
$atts = array('class' => 'btn btn-danger');
?>
<div class="row">
    <div class="col-lg-12">
        <?php echo anchor('home/index', 'Home', $atts); ?>
        <a href="/application/views/welcome_message.php" class="btn btn-danger">Loja</a>
        <a href="#" class="btn btn-danger">Cadastro</a>
        <a href="#" class="btn btn-danger">Carrinho</a>
        <a href="#" class="btn btn-danger">Sobre</a>
    </div>
</div>
<br>