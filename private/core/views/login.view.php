<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/loginStyle.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça seu login<br>e se organize conosco!</h1>
            <img src="<?= ROOT ?>/assets/style/folders/imagempc.svg" class="left-login-image" alt="pcimagem">
        </div>

        <div class="right-login">
            <form method="POST">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                </div>
            </form>
        </div>
        <?php if (count($error) > 0) : ?>

            <div class="alertcadastro" role="alert">
                <strong>Error</strong>
                <br><b>Por favor conferir os dados</b>
                <?php foreach ($error as $error) : ?>
                    <br><?= $error ?><br>

                <?php endforeach; ?>
            </div>

        <?php endif; ?>

    </div>

</body>

</html>