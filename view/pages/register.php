<!doctype html>
<html lang="pt-br">

<head>

    <script src="https://kit.fontawesome.com/4eb7eb63c7.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../../assets/img/icone.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />

    <!-- Fontawesome 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- GoogleFonts - OpenSans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- CSS Personalizado-->
    <link rel="stylesheet" href="../../assets/css/login.css" />

    <!-- Javascript -->
    <script src="../../assets/js/jquery-3.5.1.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/dataTables.bootstrap4.min.css">
    <script src="../../assets/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/js/listagem.js"></script>

    <title>Flare Project</title>
</head>

<body class="gradient-custom">
    <div class="flex-container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="loginBox col-md-">
            <h1 class="display-4 text-center"><b>FLARE</b></h1>
                <h3><b>Sign In</b></h3>
                <form action="../../controler/registerCrud/insert.php" method="post">
                    <div class="form-group">
                        <input class="inputFodase" id="uname" type="text" name="name" placeholder="Digite seu username">
                        </div>
                        <div class="form-group">
                        <input id="pass" type="password" name="password" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group">
                        <input type="number" name="balance" placeholder="Digite um valor pra apostar">
                    </div>
        
                    <input type="submit" class="botaoLogin">
                </form>
        
                <a href="#">Esqueceu sua senha?<br></a>
        
                <div class="text-center">
                    <a href="register.php">Registre-se</a>
                </div>
        
                <div class="icons">
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-discord"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                </div>
        
            </div>
        </div>
    </div>
</body>

<?php
    include_once("footer.php");
?>