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

    .espacoTopHistorico{
        padding-top: 30px;
    }

</style>

<div class="container espacoTopHistorico">

<h2  class="mb-3">Historico:</h2>
    <div class="table-reponsive">

        <table id="idTable" class="table mt-3 table-striped table-berdered">
            <thead>
                <tr>
                    <th class="text-center">Aposta</th>
                    <th class="text-center">Resultado</th>
                    <th  class="text-center">Jogo</th>
                </tr>
            </thead>

<?php
 
    foreach ($Entity->listBets("bets", $_SESSION['id']) as $b) { ?>
        <tr>
            <td  class="text-center"><?php echo $b["bet_amount"]; ?></td>

        <?php    
            if($b["result"] == 'Você perdeu'){
        ?>
            <td class="vermelho text-center">Perdeu</td>
        <?php } else { ?>
            <td class="verde text-center">Ganhou</td>
            
            <?php }
                foreach ($Entity->listGames("games",  $b["game_id"]) as $c) { ?>
                <td  class="text-center"><?php echo $c["name"]; ?></td>
            <?php } ?>
    <?php
    }
?>

<div class="text-right">      
        <a href="relatorio.php" target="_blank" title="Relatório" class="btn btn-outline-primary">
            <i class='fas fa-file-alt' style='font-size:24px'></i>
            Relatório
        </a>
   </div>
</div>
