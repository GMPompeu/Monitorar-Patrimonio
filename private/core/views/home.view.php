<?php include("include/header.view.php");  ?>
<title>Página Inicial</title>
<main class="content">
    <h2 style="font-family: 'Open Sans', sans-serif;">Página Inicial</h2>
    <hr>
    <div class="container">
        <div class="container-content">
            <p class="paragrafo">Média total de equipamentos e funcionários</p>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?= $todosEquip[0]->todos ?></div>
                        <div class="card-name">Equipamentos</div>
                    </div>
                    <div class="icon-box">
                        <i class="bi bi-pc-display"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?= $todosFunc[0]->todos ?></div>
                        <div class="card-name">Funcionários</div>
                    </div>
                    <div class="icon-box">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
            <div class="list-menu">
            <p>Quantidade de equipamentos por funcionário</p>
                <div class="content-list">
                    <table class="table-content">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Funcionário</th>
                                <th>Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $todosFunc as $todos ){?>
                            <tr>
                                <td>1</td>
                                <td><a href="allfuncionario/funcionario?idf=<?=$todos->idFunc?>"><?= $todos->nomeFunc ?></a></td>
                                <td><?= $todos->cargo ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</div>

<?php include("include/footer.view.php"); ?>