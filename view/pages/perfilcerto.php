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
<div class="centro pt-5 ">
    <h1>Olá,  <?php echo $vetor[0]["name"];?></h1>
</div>

<div class="container corFundo">
    <div class="row corFundoRow1">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="imagem-perfil">

            </div>
        </div>
    </div>


    <div class="row d-flex centro corFundoRow2 pt-5">
        <div class="username">Username:<?php echo $vetor[0]["name"]; ?></div> <br>
        
        <div>R$: <?php  echo $vetor[0]["balance"] ?> </div> <br>
        
        <div >Profile: <?php echo $vetor[0]["profile"]; ?> </div> <br>
        
        <div>Bio: <?php echo $vetor[0]["bio"]; ?> </div>

    </div>
</div>