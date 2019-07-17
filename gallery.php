<?php include 'header.php';
session_start();
include 'config.php';
if(!isset($_SESSION['email'])){
    header ('location:signup.php');
    exit();
}
?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="./static/matteob2000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/matteor2000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/moccassino1800.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/leatherbootbl4000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/leatherbootbla4000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/leatherbootbr4000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/leatherbootnb4000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/addidasslides500.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/poloblack1600.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/pologrey1600.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/pololaceless1500.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/rubber11200.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/timber5000.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/urbancasually1800.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/vpv1500.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>

        <div class="item">
            <img src="./static/vpvb1500.jpg" alt="Shoerisma" style="width: 100%;height: 1000px">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

<?php include "footer.php"?>