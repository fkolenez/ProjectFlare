<?php
    require_once '../../model/auth.class.php'; // inclui o arquivo da classe Auth

    // verifica se os dados do form foram enviados
    if(isset($_POST["name"]) && isset($_POST["password"])) {

        $name = $_POST["name"];
        $password = $_POST["password"];

        // cria uma instância da class auth
        $auth = new Auth();
        // chama o método auth da class auth
        $auth->auth($name, $password);
    }
?>
