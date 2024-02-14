<?php include("include/header.view.php");  ?>
<main class="content">
    <h2 style="font-family: 'Open Sans', sans-serif;">Perfil Usuário</h2>
    <hr>
    <div class="container">
        <p class="paragrafo">Informações pessoais</p>
        <div class="container-content">
            <div class="perfil">
                <div class="avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="informacoes">
                    <p class="nome"><?= $userInfo[0]->nomeUsu?></p>
                    <p class="identificacao"><strong>Identificação:</strong><?=$userInfo[0]->usuario?></p>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
</style>

<?php include("include/footer.view.php");  ?>