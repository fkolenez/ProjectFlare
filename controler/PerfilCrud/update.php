<?php
    include_once '../../model/Conexao.class.php';
    include_once '../../model/Entity.class.php';

    $Entity = new Entity();
    $id = $_POST["id"]; 
    $data = $_POST;


    // tem q re-hashar a senha
    foreach($data as $key => $value) {
        if($key == 'password'){
            $data[$key] = password_hash($value, PASSWORD_DEFAULT); // Atualiza o array com o valor hashado
        }
    }

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