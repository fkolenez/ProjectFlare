<?php
include_once("header.php");

    session_start();
    $id = $_SESSION['id'];
    $empEntity = new Entity();
?>


<div class="container espacoTop"><!-- Corpo do sistema -->
    <h1 class="text-center"><strong>ALTERAR DADOS</strong> </h1>
    <form method="post" action="../../controler/PerfilCrud/update.php">
        <div class="container">
            <?php foreach ($empEntity->getInfo("users", $id) as $emp) { ?>

                <input type="hidden" name="id" value="<?= $emp['id'] ?>" />

                <!-- Id / nome / Perfil / Senha / Data -->

                <div class="form-group">
                    <label>Alterar nome:</label>
                    <input type="text"
                        class="form-control"
                        name="name"
                        value="<?= $emp['name'] ?>"
                        required autofocus />
                </div>

                <div class="form-group">
                    <label>Alterar senha:</label>
                    <input type="text"
                        class="form-control"
                        name="password"
                        value="<?= $emp['password'] ?>"
                        required autofocus />
                </div>

                <div class="form-group">
                    <label>Alterar bio:</label>
                    <input type="text"
                        class="form-control"
                        placeholder="Digite sua nova bio"
                        name="bio"
                        value="<?= $emp['bio'] ?>"
                        required />
                </div>

            <?php } ?>

            <div class="form-group">
                <button class="btn btn-outline-primary btn-lg">
                    <i class='fas fa-cloud-upload-alt' style='font-size:24px'></i> Inserir
                </button>

                <a href="perfil.php" class="btn btn-outline-primary btn-lg">
                    <i class='fas fa-reply-all' style='font-size:24px'></i> Voltar
                </a>
            </div>
        </div>
    </div>
</form>

</div>

<?php
    include_once("footer.php");
?>