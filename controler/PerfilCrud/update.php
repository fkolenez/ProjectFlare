<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $Entity = new Entity();
    $id = $_POST["id"]; 
    $data = $_POST;

    if(isset($id) && !empty($id)){
        try{
            $Entity->update("users", $data, $id);
            $_SESSION["msg"] = "Atualizado com sucesso";
        }catch(Exception $e){
            $_SESSION["msg_error"] = "$e";
        }
            
        header('Location: ../logout/logout.php');
    }
?>