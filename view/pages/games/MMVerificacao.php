<?php
    include_once("../../../model/Conexao.class.php");
    include_once("../../../model/Entity.class.php");
    $Entity = new Entity();

    session_start();

    $valorAposta = $_POST['bet'];

    if (!isset($_SESSION['loseWin'])) {
        $_SESSION['loseWin'] = '';
    }

    $rand = rand(1 ,3);
    $bet = $_POST['bet'];
    $corBotao = $_POST['cor'];

    if($rand == $corBotao){
        $bet = $bet*2 ;
        $_SESSION['loseWin'] = 'Parabens você ganhou!';
        echo "<br><br>" . $_SESSION['loseWin'];

    } else {
        $bet = $bet/2;
        $_SESSION['loseWin'] = 'Você perdeu';
        echo "<br><br>" . $_SESSION['loseWin'];
    }
    
    try{
        $Entity->insertBets($_SESSION['id'], 1, $valorAposta ,  $_SESSION['loseWin']);
    } catch(Exception $e){
        $_SESSION["msg_error"] = "$e";
        echo $e;
    }

    header('Location: ../MonkeyMoney.php');
    exit();

    echo "<br><br>numero aleatorio = ".$rand;
    echo "<br><br>botao escolhido = ".$corBotao;
?>