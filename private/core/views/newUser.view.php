<?php include("include/header.view.php");  ?>
<main class="container">
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1></h1>
            <img src="<?= ROOT ?>/assets/style/folders/img-cadastro.svg" class="left-login-image" alt="pcimagem">
        </div>
        <div class="right-cadastro">

            <div class="card-cadastro">
                <h1>CADASTRAR</h1>
                <form method="POST">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="nome">Nome completo</label>
                        <input type="text" name="nomeUsu" placeholder="Nome">
                    </div>
                    <div class="textfield">
                        <label for="permissao">Nível de acesso:</label>
                        <input type="text" name="permissao" list="permissao">
                        <datalist id="permissao">
                            <option value="1">Administrador</option>
                            <option value="2">Usuário</option>
                        </datalist>
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha...">
                    </div>
                    <button type="submit" class="btn-cadastro">Cadastrar</button>
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

</main>

<?php include("include/footer.view.php");  ?>