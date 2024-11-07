<?php
include_once ("header.php");
// Inclui a conexão
include_once ("../../model/Conexao.class.php");

// Inclui a fodase
include_once ("../../model/Entity.class.php");

$empEntity = new Entity();

// Cria uma instancia (objeto) da classe Entity;
// Ele pode acessar os metodos da classe
?>
<style>
    .espacoTop{
        padding-top: 12vh;
    }
</style>

<div class="container espacoTop">
    <h1><strong>USUÁRIOS</strong></h1>

    <div class="text-right">
        <a href="register.php" class="btn btn-outline-primary">
            <i class="fas fa-file-alt" style="font-size:24px"></i>
        </a>
    </div>

    <br>

    <div class="table-reponsive">

        <table id="idTable" class="table mt-3 table-striped table-berdered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>PERFIL</th>
                    <th>BALANÇO</th>
                    <th>DATA</th>
                    <th>BIO</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($empEntity->list("users") as $emp) { ?>

                    <tr>
                        <td class="teste"> <?php echo $emp["id"]; ?> </td>
                        <td> <?php echo $emp["name"]; ?> </td>
                        <td> <?php echo $emp["profile"]; ?> </td>
                        <td> <?php echo $emp["balance"]; ?> </td>

                        <!-- date formata em d/m/a  -->
                        <td> <?php echo date("d/m/Y", strtotime($emp["register_date"])); ?> </td>
                        <td> <?php echo $emp["bio"]; ?> </td>

                        <td> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <form method="post" action="page_update.php">
                                        <input type="hidden" name="id" value="<?=$emp['id']?>">
                                        <button title="Alterar" class="btn btn-outline-primary btn-xs">
                                            <i class="fas fa-edit" style="font-size:24px"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="col-sm-6">
                                    <form method="post" action="../../controler/registerCrud/delete.php">
                                        <input type="hidden" name="id" value="<?=$emp['id']?>">
                                        <button title="Deletar" class="btn btn-outline-danger btn-xs">
                                            <i class="far fa-trash-alt" style="font-size:24px"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>    
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        setTimeout(function(){
            $("#alerta").hide("slow");
        }, 3000);
    });
</script>

<?php
    include_once ("footer.php");
?>