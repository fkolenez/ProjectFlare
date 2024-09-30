<?php
    session_start();

    $bet = $_POST['bet'];

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

    header('Location: ../MonkeyMoney.php');
    exit();

    echo "<br><br>numero aleatorio = ".$rand;
    echo "<br><br>botao escolhido = ".$corBotao;
?>