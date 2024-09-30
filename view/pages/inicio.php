<?php
    include_once("header.php");
    // tem q fazer essa pagina
?>
<div class="container">
    <br><br><br><br><br>

    <div class="alert alert-success" id="alert">
        <p>Login efetuado com sucesso!</p>
    </div>


    <form action="../../controler/logout/logout.php" method="post">
        <button class="btn btn-success" type="submit">logout</button>
    </form>

    <?php
        echo $_SESSION['id'];
    ?>
</div>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("#alert").hide("slow");
        }, 3000);
    });
</script>

<?php   
    include_once("footer.php");
?>