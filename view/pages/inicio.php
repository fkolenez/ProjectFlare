<?php
    include_once("header.php");
?>

<div class="flex-container">


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active amg">
        <a href="https://pointerpointer.com/"><img class="d-block w-100 amg" src="../../assets/img/1.png" alt="Primeiro Slide"></a>
        </div>
        <div class="carousel-item">
        <a href="MonkeyMoney.php"><img class="d-block w-100 amg" src="../../assets/img/2.png" alt="Segundo Slide"></a>
        </div>
        <div class="carousel-item">
          <a href="https://chickenonaraft.com/"><img class="d-block w-100 amg" src="../../assets/img/3.png" alt="Terceiro Slide"></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

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