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

 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <span>Nome: <?php echo $vetor[0]["name"]; ?> </span><br>
            <span>Carteira: R$: <?php  echo $vetor[0]["balance"] ?> </span><br>
            <span>Perfil: <?php echo $vetor[0]["profile"]; ?> </span><br>
        </div>
    </div>

