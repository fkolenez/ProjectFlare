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
    <div class="imagem-perfil d-flex justify-content-center align-items-center"><i
                class="fa fa-user tamanhoIcon"></i>
            </div>
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

            <div class="pr-3">
                <a href="historico.php"><button class="btn btn-outline-info color-info">Historico</button></a>
            </div>

            <div class="pr-3">
                <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">
                    Excluir conta
                </button>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Confirmar exclusão</h5>
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body text-dark">
                            Tem certeza de que deseja excluir sua conta? Esta ação não poderá ser desfeita.
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancelar</button>
                            <a href="../../controler/PerfilCrud/delete.php"><button type="button" class="btn btn-outline-danger">Sim, quero excluir</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
</div>