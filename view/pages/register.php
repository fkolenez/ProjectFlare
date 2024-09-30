
<head>
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

<div class="container espacoTop">
        <h2 class="text-center">Cadastro</h2>

        <form method="post" action="../../controler/registerCrud/insert.php">
            <div class="container">
                <div class="form">

                  <!-- Id / nome / Perfil / Senha / Data -->

                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control" placeholder="Digite seu nome" name="name" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label>Senha:</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha" name="password" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Valor para sua carteira:</label>
                        <input type="number" class="form-control" placeholder="Digite o quanto quer apostar" name="balance" required autofocus>
                    </div>

                    <div class="form-group"> 
                        <button class="btn btn-outline-primary">
                            <i class='fas fa-cloud-upload-alt' style='font-size:16px; font-weight: normal;' title="Terminar registro">Terminar registro</i>
                        </button>

                        <a href="inicio.php" class="textoBtn btn btn-outline-primary m-3"><i class='fas fa-angle-left' style='font-size:24px'></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
<?php
    include_once ("footer.php");
?>