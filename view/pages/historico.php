<?php
    session_start();

     include_once("../../model/Conexao.class.php");
     include_once("../../model/Entity.class.php");
     $Entity = new Entity();
 
    foreach ($Entity->listBets("bets", $_SESSION['id']) as $b) { ?>
        Você apostou: <?php echo $b["bet_amount"]; ?>,
        resultado:  <?php echo $b["result"]; ?>,

       <?php
            foreach ($Entity->listGames("games",  $b["game_id"]) as $c) { ?>
            jogo: <?php echo $c["name"]; ?>,
        <?php } ?>
       
        user_id: <?php echo $b["user_id"]; ?>,
        
        <br>
    <?php
    }
?>