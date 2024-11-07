<?php
    session_start();
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $Entity = new Entity();
    $id = $_POST["id"]; 
    
    if(isset($id) && !empty($id)){

        // deleta do banco
        try {
            $Entity->deleteByUser("bets", $id);
            $Entity->delete("users", $id);
            $_SESSION["msg"] = "Deletado com sucesso";
        } catch (Exception $e) {
            $_SESSION["msg_error"] = "$e";
        }

        header('Location: ../../view/pages/listagem.php');
    }
?>