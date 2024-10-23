<?php
include_once('header.php');
?>

<style>
    .centro {
        display: flex;
        justify-content: center;
    }

    .card {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 420px;
    }
</style>

<div class="container espacoTop">
    <div class="row ">
        <div class="col-md-4 col-sm-12 col-xs-12 pt-3 centro">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../../assets/img/macaco.jpeg" alt="Card image cap">
                <div class="card-body">
                    <div class="centro">
                        <h4>MONKEY MONEY</h4>
                    </div>

                    <div class="centro">
                       <a href="MonkeyMoney.php"> <button class="play-btn">Play!</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 pt-3 centro">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <div class="centro">
                            <a href="#"><button class="play-btn">Play!</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 pt-3 centro">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">

                    <div class="centro">
                        <a href="#"> <button class="play-btn">Play!</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>