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
        <div class="row ab">

        </div>
       <div class="row sei">
               <span class="perfil-item">Username:  </span><br>
               <div class="perfil-item username"><?php echo $vetor[0]["name"]; ?></div>
               <span class="perfil-item">Cash: </span><br>
               <div class="perfil-item username">R$ <?php  echo $vetor[0]["balance"] ?></div>
               <span class="perfil-item">Bio: </span><br>
               <div class="perfil-item username"><?php echo $vetor[0]["profile"]; ?> </div>
           </div>
       </div>
    </div>