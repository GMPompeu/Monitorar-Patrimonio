<?php include("include/header.view.php");  ?>


<main class="content">
    <h2 style="font-family: 'Open Sans', sans-serif;">Funcionários</h2>
    <hr>
    <div class="container">
        <p class="paragrafo">Total de Equipamentos</p>
        <div class="container-content">
            <div class="list-func">
                <?php 
                    foreach ($allInfo as $tudo) { ?>

                        <div class="funcionarios">
                            <a href="allequipamento/equipamento?numSerie=<?= $tudo->numSerie ?>">
                                <i class="bi bi-person-circle">
                                    <?= $tudo->nomeEquip ?>
                                </i>
                            </a>|
                            <span><strong>Marca </strong> <?= $tudo->marcaEquip ?></span>
                            <span><strong>Categoria: </strong> <?= $tudo->categoria ?></span>
                            <span><strong>Série: </strong><?= $tudo->numSerie ?></span>
                            <?php if ($tudo->nomeFunc != null){ ?>
                            <span><strong>Funcionário: </strong><?= $tudo->nomeFunc ?></span>
                            <?php }?>
                            <?php if (Auth::acess() == 1) { ?>
                            <button class="remover" onclick="showPopup('<?= $tudo->numSerie ?>')">Excluir</button>
                                <?php } ?>
                        </div>
                        <div id="popup-<?= $tudo->numSerie ?>" class="popup" style="display: none;">
                            <div id="popup-content">
                                <form method="POST">
                                    <input type="hidden" name="acao" value="delete">
                                    <input type="hidden" name="numSerie" value="<?= $tudo->numSerie ?>">
                                    <span id="close-button" onclick="closePopup('<?= $tudo->numSerie ?>')"><strong>X</strong></span>
                                    <p><strong>Tem certeza de que deseja Excluir?</strong></p>
                                    <button class="remover" type="submit">Excluir</button>
                                </form>
                            </div>
                        </div>
                <?php }
                 ?>
            </div>
        </div>
    </div>
</main>
<?php include("include/footer.view.php");  ?>