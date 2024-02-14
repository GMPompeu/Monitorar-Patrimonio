<?php include("include/header.view.php");  ?>
<main class="container">
    <div class="main-cadastro">
        <div class="left-cadastro">
            <h1></h1>
            <img src="<?= ROOT ?>/assets/style/folders/img-cadastro.svg" class="left-login-image" alt="pcimagem">

        </div>

        <div class="right-cadastro">

            <div class="card-cadastro">
                <h1>Equipamentos</h1>
                <form method="POST">
                    <div class="textfield">
                        <label for="usuario">Nome do equipamento</label>
                        <input type="text" name="nomeEquip" placeholder="Equipamento">
                    </div>
                    <div class="textfield">
                        <label for="categoria">Departamento:</label>
                        <input type="text" name="categoria" list="categoria">
                        <datalist id="categoria">
                            <option value="TI">Tecnologia Informação</option>
                            <option value="RH">Recursos Humanos</option>
                        </datalist>
                    </div>
                    <div class="textfield">
                        <label for="modeloEquip">Modelo do Equipamento</label>
                        <input name="modeloEquip" placeholder="Modelo">
                    </div>
                    <div class="textfield">
                        <label for="marcaEquip">Marca do Equipamento</label>
                        <input name="marcaEquip" placeholder="Marca">
                    </div>
                    <div class="textfield">
                        <label for="valorEquip">Valor do Equipamento</label>
                        <input name="valorEquip" placeholder="Valor">
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