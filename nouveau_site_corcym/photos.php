<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel="stylesheet" type="text/css" href="css/photos.css">
    <script src="js/photos.js"></script>
</head>

<?php
include("includes/navbar.php");
?>

<body>
<div class="carousel" id="carousel-container">
        <div>
            <ul id="carousel" class="animate" >
                <li class="slide animate">
                    <img src="./img/caroussel/11.jpg" class="chemin"/>
                </li>
                <li class="slide animate">
                    <img src="./img/caroussel/12.jpg"/>
                </li> 
                <li class="slide animate">
                    <img src="./img/caroussel/nature-1.jpg"/>
                </li>
                <li class="slide animate">
                    <img src="./img/caroussel/plateforme.jpg" width="500" height="350"/>
                </li>
                <li class="slide animate">
                    <img src="./img/caroussel/2.jpg"/>
                </li>
                <li class="slide animate">
                    <img src="./img/caroussel/pese_bebe.jpg" width="500" height="350"/>
                </li>
            </ul> 
        </div>
       
        <div id="controls">
            <span id="prev"><img src="./img/back.png" width="60px"></span>
            <span id="next"><img src="./img/forward.png" width="60px"></span>
        </div>
    </div>
    <div class="aggrandissement">
        <img src="" id="agrandissement"/>
        </div>

</body>

<footer class="footer">
    <?php
    include("includes/footer.php");
    ?>
</footer>

</html>