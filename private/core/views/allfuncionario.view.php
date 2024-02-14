<?php include("include/header.view.php");  ?>

<main class="content">
    <h2 style="font-family: 'Open Sans', sans-serif;">Funcionários</h2>
    <hr>
    <div class="container">
        <p class="paragrafo">Total de funcionários</p>
        <div class="container-content">
            <div class="list-func">
                <?php foreach ($todosFunc as $funcionario) { ?>
                    <div class="funcionarios">
                        <a href="allfuncionario/funcionario?idf=<?= $funcionario->idFunc ?>">
                            <i class="bi bi-person-circle">
                                <?= $funcionario->nomeFunc ?>
                            </i>
                        </a>|
                        <span><strong>Cargo: </strong> <?= $funcionario->cargo ?></span>
                        <span><strong>Centro de Custo:</strong></strong> <?= $funcionario->cargo ?></span>
                        <?php if (Auth::acess() == 1) { ?>
                        <button class="remover" onclick="showPopup('<?= $funcionario->idFunc ?>')">Excluir</button>
                        <?php } ?>
                    </div>
                    <div id="popup-<?= $funcionario->idFunc ?>" class="popup" style="display: none;">
                        <div id="popup-content">
                            <form method="POST">
                                <input type="hidden" name="idFunc" value="<?= $funcionario->idFunc ?>">
                                <span id="close-button" onclick="closePopup('<?= $funcionario->idFunc ?>')"><strong>X</strong></span>
                                <p><strong>Tem certeza de que deseja Excluir?</strong></p>
                                <button class="remover" type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php include("include/footer.view.php");  ?>