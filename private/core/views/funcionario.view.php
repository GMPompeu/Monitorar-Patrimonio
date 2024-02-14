<?php include("include/header.view.php");  ?>
<title>Funcionário</title>
<main class="content">
    <div class="container-func">
        <div class="content-func">
            <i id="func-main" class="bi bi-person-circle"><span class="name-func">
                    <?= $infoFunc[0]->nomeFunc ?></span>
            </i>
            <hr>
            <div class="data-func">
                <ul>
                    <li><strong>Chapa:</strong><?= $infoFunc[0]->idFunc ?></li>
                    <li><strong>Cargo:</strong><?= $infoFunc[0]->cargo ?></li>
                    <li><strong>Equipamentos:</strong><?= $equiPfunc[0]->QuantidadeEquipamentos ?? '0' ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cards-func">
        <?php if ($equiPfunc != null) {
            foreach ($equiPfunc as $total) { ?>
                <div class="card-func">
                    <div class="card-content">
                        <div class="number"><?= $total->categoria ?></div>
                        <div class="card-name"><strong><?= $total->nomeEquip ?></strong></div>
                        <div class="card-name"><strong>Numero de Série: </strong><?= $total->numSerie ?></div>
                        <div class="card-name"><strong>Marca: </strong><?= $total->marcaEquip ?></div>
                    </div>
                    <div class="icon-box">
                        <i class="bi bi-pc-display"></i>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</main>

<?php include("include/footer.view.php");  ?>