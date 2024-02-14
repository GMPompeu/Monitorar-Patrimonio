<?php include("include/header.view.php");  ?>
<title>Funcionário</title>
<main class="content">
    <div class="container-func">
        <div class="content-func">
            <i id="func-main" class="bi bi-pc-display"><span class="name-func">
                    <?= $infoEquip[0]->nomeEquip ?></span>
            </i>
            <hr>
            <div class="data-func">
                <ul>
                    <li><strong>Numero de Série: </strong><?= $infoEquip[0]->numSerie ?></li>
                    <li><strong>Categoria: </strong> <?= $infoEquip[0]->categoria ?></li>
                    <li><strong>Marca: </strong><?= $infoEquip[0]->marcaEquip ?></li>
                    <li><strong>Modelo: </strong> <?= $infoEquip[0]->modeloEquip ?></li>
                </ul>
                <?php if ($infoEquip[0]->idFunc == null) { ?>
                    <button class="btn-func" onclick="showPopup('<?= $infoEquip[0]->numSerie ?>')">Vincular</button>
                <?php } ?>
                <?php if ($infoEquip[0]->idFunc != null) {
                    if (Auth::acess() == 1) { ?>

                        <button class="remover" onclick="showPopupDes('<?= $infoEquip[0]->numSerie ?>')">Desvincular</button>
                <?php }
                } ?>
            </div>
        </div>
        <div id="popup-<?= $infoEquip[0]->numSerie ?>" class="popup" style="display: none;">
            <div id="popup-content">
                <form method="POST">
                    <input type="hidden" name="num" value="<?= $infoEquip[0]->numSerie ?>">
                    <span id="close-button" onclick="closePopup('<?= $infoEquip[0]->numSerie ?>')"><strong><i class="bi bi-x-circle"></i></strong></span>
                    <h2><strong>Vincular funcionario</strong></h2>
                    <label for="idFunc">Escolher funcionário</label>
                    <div class="div-select">
                        <select class="opcao" name='idFunc'>
                            <option value=""></option>
                            <?php foreach ($todosFunc as $todos) { ?>
                                <option value="<?= $todos->idFunc ?>"><?= $todos->nomeFunc ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn-func" type="submit" name="acao" value="vincular">Vincular</button>
                </form>
            </div>
        </div>
    </div>
    <div class="cards-func">
        <?php if ($funcEquip != null) {
        ?>
            <div class="card-func">
                <div class="card-content">
                    <a href="../allfuncionario/funcionario?idf=<?= $funcEquip[0]->idFunc ?>">
                        <div class="number"><?= $funcEquip[0]->nomeFunc ?></div>
                        <div class="card-name">Chapa: <strong><?= $funcEquip[0]->idFunc ?></strong></div>
                        <div class="card-name"><strong>Cargo: </strong><?= $funcEquip[0]->cargo ?></div>
                    </a>
                </div>
                <div class="icon-box">
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
            <div id="popupDes-<?= $infoEquip[0]->numSerie ?>" class="popup" style="display: none;">
                <div id="popup-content">
                    <form method="POST">
                        <input type="hidden" name="num" value="<?= $infoEquip[0]->numSerie ?>">
                        <span id="close-button" onclick="closePopupDes('<?= $infoEquip[0]->numSerie ?>')"><strong><i class="bi bi-x-circle"></i></strong></span>
                        <h2><strong>Deseja Desvincular</h2><?= $funcEquip[0]->nomeFunc ?> deste Equipamento?</strong>
                        <br><br>
                        <button class="remover" type="submit" name="acao" value="desvincular">Desvincular</button>
                </div>
                </form>
            </div>
    </div>
<?php } ?>
</div>
</main>

<?php include("include/footer.view.php");  ?>