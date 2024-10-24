<?php
include_once '../../model/Conexao.class.php';
include_once '../../model/Entity.class.php';

session_start();

$Entity = new Entity();
$data = $_POST;
$vetor = $Entity->getInfoByName("users", $_POST['name']);

if (count($vetor) > 0) { // tem o registro no banco
    $_SESSION["msg_error"] = "Nome de usuario já cadastrado";
    header('Location: ../../view/pages/register.php');
} else {
    if (isset($data) && !empty($data)) {
        // chamar  insert do banco
        try {
            $Entity->insert("users", $data);
            $_SESSION["msg_success"] = "Usúario cadastrado com sucesso!";
            header('Location: ../../view/pages/login.php');

        } catch (Exception $e) {
            $_SESSION["msg_error"] = "$e";    
            header('Location: ../../view/pages/register.php');
        }
    }
}

