<?php
    include_once("header.php");
    $loseWin = $_SESSION['loseWin'];
?>
<style>
    .centro {
        justify-content: center;
        display: flex;
    }
</style>



<div class="container espacoTop">
    <form action="games/MMVerificacao.php" method="post">
        <div class="container">

            <div class="row">
                <div class="col-md-12 centro">
                    <input type="number" name="bet" class="betInput">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 centro">
                    <button class="btn btn-danger w-3" type="submit" value="1" name="cor">Vermelho</button>
                </div>

                <div class="col-md-4 centro">
                    <button class="btn btn-info w-3" type="submit" value="2" name="cor">Azul</button>
                </div>

                <div class="col-md-4 centro">
                    <button class="btn btn-light w-3" type="submit" value="3" name="cor">Branco</button>
                </div>
            </div>

            <div class="row centro">
                <?php if (isset($_SESSION['loseWin']) && !empty($_SESSION['loseWin'])){?>

                    <?php   if($_SESSION['loseWin'] == 'Você perdeu'){ ?>
                        <div class="alert alert-danger mt-3" id="alert"><?php echo $_SESSION['loseWin'] ?> </div>
                    <?php } else { ?>
                        <div class="alert alert-success mt-3" id="alert"><?php echo $_SESSION['loseWin']; ?> </div>
                    <?php } ?> 
                
                    <?php $_SESSION['loseWin'] = ''; ?>
    
                <?php } ?>
            </div>


        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("#alert").hide("slow");
        }, 1000);
    });
</script>