<?php include("include/header.view.php");  ?>
<main class="container">
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1></h1>
            <img src="<?= ROOT ?>/assets/style/folders/register.svg" class="left-login-image" alt="pcimagem">

        </div>

        <div class="right-cadastro">

            <div class="card-cadastro">
                <h1>FUNCIONÁRIO</h1>
                <form method="POST">
                    <div class="textfield">
                        <label for="usuario">Nome Funcionário</label>
                        <input type="text" name="nomeFunc" placeholder="Nome">
                    </div>
                    <div class="textfield">
                        <label for="nome">Cargo</label>
                        <input type="text" name="cargo" placeholder="Cargo">
                    </div>
                    <div class="textfield">
                        <label for="senha">CPF</label>
                        <input name="cpf" placeholder="(000.000.000-00)">
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