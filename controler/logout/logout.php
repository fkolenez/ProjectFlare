<?php
    //nessa pagina acaba a sessão

    session_start();
    // sim é assim memo vai se fode
    // ela existe no navegador, ams nao no codigo ai por isso cria dnv
    session_destroy();
    header('Location: ../../view/pages/login.php')    
?>