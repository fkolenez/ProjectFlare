<?php
    session_destroy(); 

    session_start();
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $Entity = new Entity();
    $idLoggedUser = $_SESSION['id'];

    if(isset($idLoggedUser) && !empty($idLoggedUser)){
        try {
            $Entity->deleteByUser("bets", $idLoggedUser);
            $Entity->delete("users", $idLoggedUser);
            $_SESSION["msg_success"] = "Deletado com sucesso";
        } catch (Exception $e) {
            $_SESSION["msg_error"] = "$e";
        }

        header('Location: ../../view/pages/login.php');
    }
?>