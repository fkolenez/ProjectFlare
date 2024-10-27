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
        padding-top: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="container espacoTop">
    <form action="games/MMVerificacao.php" method="post">

        <div class="row game">
            <div class="col-md-6 form-group">
                <div class="row texto">
                    <h5>Selecione uma cor:</h5>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 mb-1 mt-1"> <button class="btn botaoBet1" type="submit" value="1" name="cor"> 2x</button></div>
                    <div class="col-md-4 col-sm-12 mb-1 mt-1"><button class="btn botaoBet2" type="submit" value="2" name="cor">2x</button></div>
                    <div class="col-md-4 col-sm-12 mb-1 mt-1"><button class="btn botaoBet3" type="submit" value="3" name="cor">2x</button></div>
                </div>

                <div class="row form-group mt-3">
                <div class="input-group">
                        <input type="number" name="bet" class="input_monkey mb-3" placeholder="Faça sua aposta!">
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

        <div> 
            <?php if(isset($_SESSION['invalido']) && !empty($_SESSION['invalido'])){?>                    
                        <div class="alert alert-danger mt-3" id="alert"><?php echo $_SESSION['invalido'];?> </div>                    
            <?php 
                unset($_SESSION['invalido']); }  
            ?>  
        </div>
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