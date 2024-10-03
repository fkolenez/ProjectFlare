<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $Entity = new Entity();
    $data = $_POST; 

    if(isset($data) && !empty($data)){

        // chamar  insert do banco
        try{
            $Entity->insert("users", $data);
            $_SESSION["msg"] = "Inserido com sucesso";
        } catch(Exception $e){
            $_SESSION["msg_error"] = "$e";
        }

        header('Location: ../../view/pages/login.php');
    }
?>