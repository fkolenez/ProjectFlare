<!doctype html>
<html lang="pt-br">
<?php
    session_start();
?>
<head>
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
    <script src="https://kit.fontawesome.com/4eb7eb63c7.js" crossorigin="anonymous"></script>

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

<style>
    .vtnc{
        font-family: 'Dela Gothic One', sans-serif;
        font-weight: bolder;
        font-weight: 700;
        line-height: 1.2;
        font-size: 3.5rem;
    }
</style>

<body class="gradient-custom">
    <div class="flex-container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="loginBox col-md-">
                <h1 class="display-4 text-center"><b>FLARE</b></h1>
                <h3><b>Login</b></h3>
                <form action="../../controler/auth/auth.php" method="post">
                    <div class="form-group">
                        <input class="inputFodase" id="uname" type="text" name="name" placeholder="Digite seu username">
                        </div>
                        <div class="form-group">
                        <input id="pass" type="password" name="password" placeholder="Digite sua senha">
                    </div>
        
                    <input type="submit" class="botaoLogin">
                </form>

                <a href="#">Esqueceu sua senha?<br></a>
        
                <div class="text-center">
                    <a href="register.php">Registre-se</a>
                </div>   

                    <?php if(isset($_SESSION['msg_error']) && !empty($_SESSION['msg_error'])){?>
                        <div class="alert alert-danger mt-3" id="alerta"><?php echo $_SESSION['msg_error'];?> </div>
                    <?php }unset($_SESSION['msg_error']); ?> 

                    <?php if(isset($_SESSION['msg_success']) && !empty($_SESSION['msg_success'])){?>
                        <div class="alert alert-success mt-3" id="alerta"><?php echo $_SESSION['msg_success']; ?> </div>
                    <?php } unset($_SESSION['msg_sucess']);?> 
                    
                    <?php if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){?>
                        <div class="alert alert-success mt-3" id="alerta"><?php echo $_SESSION['msg']; ?> </div>
                    <?php } unset($_SESSION['msg']);?> 

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

<script>
    $(document).ready(function(){
        setTimeout(function(){
            $("#alerta").hide("slow");
        }, 2000);
    });
</script>