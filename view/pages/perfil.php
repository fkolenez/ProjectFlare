<?php
include_once("header.php");

require_once '../../model/Conexao.class.php';
require_once '../../model/auth.class.php';
require_once '../../model/Entity.class.php';

$idLoggedUser = $_SESSION['id'];
$list = new Entity();

$vetor = $list->getInfo("users", $idLoggedUser);
?>

<link rel="stylesheet" href="../../assets/css/master.css" />
<br>
<div class="centro pt-5 mt-2 mb-2">
    <h1>Olá, <?php echo $vetor[0]["name"]; ?></h1>
</div>

<div class="container centroContainer">
    <div class="row rowCima">

    </div>

    <div class="meio">
        <div class="imagem-perfil"></div>
    </div>

    <div class="row rowBaixo">
        <div class="rowInformacoes">
            <div class="username">Username:<?php echo $vetor[0]["name"]; ?></div>
            <div>Profile: <?php echo $vetor[0]["profile"]; ?> </div>

            <div>R$: <?php echo $vetor[0]["balance"] ?> </div>


            <div>Bio: <?php echo $vetor[0]["bio"]; ?>
            </div>
        </div>

        <div class="rowButtons pt-1">
            <form action="../../controler/logout/logout.php" method="post" class="pr-3">
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>

            <form action="updatePerfil.php" method="post" class="pr-3">
                <button class="btn btn-outline-success" type="submit">Alterar perfil</button>
            </form>

            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" id="exampleModal" type="submit">Excluir conta</button>
        </div>
    </div>
</div>