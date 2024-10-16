<?php
    session_start();
    include_once("header.php");

     include_once("../../model/Conexao.class.php");
     include_once("../../model/Entity.class.php");
     $Entity = new Entity();
?>

<style>         
    .vermelho{
        background-color: #ff000025;
        color: #CCC;
    }

    .verde{
        background-color: #15ff0025;
        color: #CCC;
    }
</style>
<div class="container espacoTop">
    <h2>Historico:</h2>

    <div class="text-right">
        <a href="inicio.php" class="btn btn-outline-primary">
            <i class="fas fa-file-alt" style="font-size:24px"></i>
        </a>
    </div>

    <br>

    <div class="table-reponsive">

        <table id="idTable" class="table mt-3 table-striped table-berdered">
            <thead>
                <tr>
                    <th>Aposta</th>
                    <th>Resultado</th>
                    <th>Jogo</th>
                </tr>
            </thead>

<?php
 
    foreach ($Entity->listBets("bets", $_SESSION['id']) as $b) { ?>
        <tr>
            <td class="centro"><?php echo $b["bet_amount"]; ?></td>

        <?php    
            if($b["result"] == 'Você perdeu'){
        ?>
            <td class="vermelho">Perdeu</td>
        <?php } else { ?>
            <td class="verde">Ganhou</td>
            
            <?php }
                foreach ($Entity->listGames("games",  $b["game_id"]) as $c) { ?>
                <td><?php echo $c["name"]; ?></td>
            <?php } ?>
    <?php
    }
?>