<?php
    include_once("../../../model/Conexao.class.php");
    include_once("../../../model/Entity.class.php");
    session_start();
    $Entity = new Entity();

    $idLoggedUser = $_SESSION['id'];
	$vetor = $Entity->getInfo("users", $idLoggedUser);
    $carteira = $vetor[0]["balance"];

    $bet = $_POST['bet'];
    $corBotao = $_POST['cor'];

    $rand = rand(1 ,3);

    if($bet < 1 or $bet > $carteira){

        $_SESSION['invalido'] = 'Sua aposta é maior que seu saldo!';
        header('Location: ../MonkeyMoney.php');
        exit();

    }

    if (!isset($_SESSION['loseWin'])) {
        $_SESSION['loseWin'] = '';
    }

    if($rand == $corBotao){
        $carteira += $bet*1.5;
        $_SESSION['loseWin'] = 'Parabens você ganhou!';

    } else {
        $carteira -= $bet;
        $_SESSION['loseWin'] = 'Você perdeu';
    }
    
    $Entity -> updateBalance("users",  $carteira, $idLoggedUser);

    try{
        $Entity->insertBets($_SESSION['id'], 1, $bet ,  $_SESSION['loseWin']);
    } catch(Exception $e){
        $_SESSION["msg_error"] = "$e";
        echo $e;
    }

    header('Location: ../MonkeyMoney.php');
    exit();
?>