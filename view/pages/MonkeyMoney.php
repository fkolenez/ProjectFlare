<?php
    include_once("header.php");
    include_once("../../model/Conexao.class.php");
    include_once("../../model/Entity.class.php");
    $Entity = new Entity();
    $loseWin = $_SESSION['loseWin'];
?>
<style>
    html{
        height: 100vh;
    }
    body{
        height: 100vh;
        background-color: #18002C;
    }
    .centro {
        justify-content: center;
        display: flex;
    }
    .espacoTop{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;

    }
</style>

<div class="container espacoTop">
    <form action="games/MMVerificacao.php" method="post">
        <div class="container">

        <div class="row game">
            <div class="col-md-6 form-group">
                <div class="row texto">
                    <h5>Selecione uma cor:</h5>
                </div>

                <div class="row">
                    <div class="col-md-4 paddingTesao1"> <button class="btn botaoBet1" type="submit" value="1" name="cor"> 2x</button></div>
                    <div class="col-md-4 paddingTesao2"><button class="btn botaoBet2" type="submit" value="2" name="cor">2x</button></div>
                    <div class="col-md-4 paddingTesao3"><button class="btn botaoBet3" type="submit" value="3" name="cor">2x</button></div>
                </div>

                <div class="row form-group mt-3">
                <div class="input-group mb-3">
                        <input type="number" name="bet" class="input_monkey" placeholder="Faça sua aposta!">
                    </div>
                </div>
            </div>

            <div class="col-md-6 teste">


                <div class="quadrado">
                    
                    <?php if(isset($_SESSION['loseWin']) && !empty($_SESSION['loseWin'])){?>
                    <?php   if($_SESSION['loseWin'] == 'Você perdeu'){ ?>
                        <div class="alert alert-danger mt-3" id="alert"><?php echo $_SESSION['loseWin'];?> </div>
                    <?php } else { ?>
                        <div class="alert alert-success mt-3" id="alert"><?php echo $_SESSION['loseWin']; ?> </div>
                    <?php } ?> 
                
                    <?php $_SESSION['loseWin'] = ''; ?>
    
                 <?php }  ?>                                  
                           
                          <div id="flare">            
                            FLARE<br>
                            FLARE<br>
                            FLARE<br>
                        </div>

                </div>
            </div>
        </div>

             <?php foreach ($Entity->list("bets") as $b) { ?>
                Você apostou: <?php echo $b["bet_amount"]; ?><br>
                Resultado:  <?php echo $b["result"]; ?><br>
            <?php } ?>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {

        $("#flare").hide();

        setTimeout(function () {
            $("#alert").hide("slow");
            $("#flare").show();
        }, 1000);
    });
</script>