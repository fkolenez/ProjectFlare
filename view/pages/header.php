<?php

require_once '../../model/Conexao.class.php';
    require_once '../../model/auth.class.php';
    require_once '../../model/Entity.class.php';

// se nao existe o usuario manda p fora
// pro usuario acessar a sessão tem q existir

session_start();
if (!isset($_SESSION['user'])) {
	session_destroy();
	header('Location: login.php');
	die();
}

	$idLoggedUser = $_SESSION['id'];
	$list = new Entity();

	$vetor = $list->getInfo("users", $idLoggedUser);

?>

<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="../../assets/img/icone.png" type="image/png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />

	<!-- Fontawesome 5 -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



	<!-- CSS Personalizado-->
	<link rel="stylesheet" href="../../assets/css/master.css" />

	<!-- Javascript -->
	<script src="../../assets/js/jquery-3.5.1.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../../assets/css/dataTables.bootstrap4.min.css">
	<script src="../../assets/js/jquery.dataTables.min.js"></script>
	<script src="../../assets/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../assets/js/listagem.js"></script>

	<title>Flare Project</title>
</head>

<body>


	<div class="container">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-vaga-nav">
			<a class="navbar-brand" href="#">Flare</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#menu" aria-controls="menu" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse  justify-content-between" id="menu">
				<div>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link fonte" href="games.php">Jogos</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="listagem.php">Registro</a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="perfil.php">Perfil</a>
						</li>
					</ul>
				</div>

				<div>
					R$: <?php echo $vetor[0]["balance"] ?>
				</div>
			</div>
		</nav>
		<!--<div class="jumbotron">
        <h1 class="d-flex justify-content-end">Sys Emp</h1>
    </div>-->
	</div>