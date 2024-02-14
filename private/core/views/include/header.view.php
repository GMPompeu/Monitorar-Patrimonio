<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/content.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/funcionario.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/headerStyle.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/table.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/urlposition.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/allfunc.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/style/cadastro.css">
    <script src="<?= ROOT ?>/assets/style/folders/script/urlposition.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    </nav>
    <div class="container-sidebar">
        <nav class="sidebar">
            <ul>
                <span id="perfil-person"><i class="bi bi-person-circle"></i></span>
                <li><span id="perfil-person"><?= Auth::user(); ?></span></li>
                <hr>
                <li style="margin-top: 20px;"><a href="../public/perfil?usuario=<?= Auth::id(); ?>"><i class="bi bi-person-fill"> </i>Perfil</a></li>
                <li style="margin-top: 30px;" id="conf"><a href="#"><i class="bi bi-gear-fill"></i> Configurações</a>
                    <ul class="dropdown">
                        <li><a href="alterPassword">Alterar Senha</a></li>
                    </ul>
                </li>
                <li style="margin-top: 25px;"><a href="<?=ROOT?>/logout"><i class="bi bi-arrow-bar-right"></i>Sair</a></li>
            </ul>
            <span class="idf-version">Trabalho-Josefa V-1.0.01</span>
        </nav>
        <nav class="navbar">
            <ul>
                <li><a class="pag-url" href="/Trabalho-Josefa/public/home">Home</a></li>
                <?php if (Auth::acess() == 1) { ?>
                <li><a class="pag-url" href="/Trabalho-Josefa/public/cadastrar">Cadastrar</a></li>
                <?php } ?>
                <li><a class="pag-url" href="/Trabalho-Josefa/public/allfuncionario">Funcionários</a></li>
                <li><a class="pag-url" href="/Trabalho-Josefa/public/allequipamento">Equipamentos</a></li>
            </ul>
        </nav>