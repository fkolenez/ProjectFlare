<?php
    include_once("header.php");

    require_once '../../model/Conexao.class.php';
    require_once '../../model/auth.class.php';
    require_once '../../model/Entity.class.php';
    
    $idLoggedUser = $_SESSION['id'];
    $list = new Entity();

    $vetor = $list->getInfo("users", $idLoggedUser);
?>

<br><br>
<link rel="stylesheet" href="../../assets/css/master.css" />
<div class="centro pt-5">
    <h1>Olá,  <?php echo $vetor[0]["name"];?></h1>
</div>

    <div class="container perfil-card">
        <div class="row">
            <div class="imagem-perfil">

            </div>
        </div>
       <div class="row sei">
           <div class="col-md-12 centro">
               <span class="perfil-item">Username: <?php echo $vetor[0]["name"]; ?> </span><br>
               <span class="perfil-item">Cash: R$<?php  echo $vetor[0]["balance"] ?> </span><br>
               <span class="perfil-item">Bio: <?php echo $vetor[0]["profile"]; ?> </span><br>
           </div>
       </div>
    </div>

