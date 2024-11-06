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
    <div class="container qmsomos">
        <h1>Quem somos</h1>
        <p>Um bando de gerecotinga</p>
        <h2>Flávio "FKZ"</h2>
        <p>Gênio Indomável o mais influente no projeto responsavél pelo funcionamento da maior parte do site</p>
        <h2>Rafael "RAFO"</h2>
        <p>Empresário, empreendedor e artista o grande responsavel pelos componentes e disposição do site</p>
        <h2>Emanuel "Santez"</h2>
        <p>Injustiçado o que tenta mas não incrementa responsavel pricipalmente por detalhes visuais e por responsividade, oprimido por FKZ</p>
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