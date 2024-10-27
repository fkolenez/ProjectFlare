<?php
    include_once("header.php");
?>

<div class="container p-5">



    <form action="../../controler/logout/logout.php" method="post">
        <button class="btn btn-success" type="submit">logout</button>
    </form>
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