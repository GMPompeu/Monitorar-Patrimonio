<?php include("include/header.view.php");  ?>
<div class="main-cadastro">
    <div class="left-cadastro">
        <h1></h1>
        <img src="<?= ROOT ?>/assets/style/folders/alterPass.svg" class="left-login-image" alt="pcimagem">
    </div>
    <div class="right-cadastro">

        <div class="card-cadastro">
            <h1>ALTERAR SENHA</h1>
            <form method="POST">
                <div class="textfield">
                    <label for="usuario">Senha Atual</label>
                    <input type="password" name="senha" placeholder="Senha...">
                </div>
                <div class="textfield">
                    <label for="nome">Nova Senha</label>
                    <input type="password" name="senhaA" placeholder="Nova Senha...">
                </div>
                <div class="textfield">
                    <label for="senha">Confirmar Nova Senha</label>
                    <input type="password" name="confsenha" placeholder="Confirmar...">
                </div>
                <button type="submit" class="btn-cadastro">Alterar</button>
            </form>
        </div>
        <?php if (count($erro) > 0) : ?>

            <div class="alertcadastro" role="alert">
                <strong>Error</strong>
                <br><b>Por favor conferir os dados</b>
                <?php foreach ($erro as $erro) : ?>
                    <br><?= $erro ?><br>

                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </div>
</div>
<?php include("include/footer.view.php");  ?>