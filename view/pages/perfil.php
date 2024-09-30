<?php
    
    require_once '../../model/Conexao.class.php';
    require_once '../../model/auth.class.php';

    session_start();
    
    $_SESSION['id'] = $idDaPiranhaQueLogou;

    
?>