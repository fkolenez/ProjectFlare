<?php
    include_once("header.php");

    require_once '../../model/Conexao.class.php';
    require_once '../../model/auth.class.php';
    require_once '../../model/Entity.class.php';

    session_start();
    
    $idLoggedUser = $_SESSION['id'];
    $list = new Entity();

    $vetor = $list->getInfo("users", $idLoggedUser);

    echo $vetor[0]["name"];
    echo $vetor[0]["balance"];
    echo $vetor[0]["profile"];
?>

<div class="centro">
    <h1>Olá,  <?php echo $vetor[0]["name"];?></h1>
</div>