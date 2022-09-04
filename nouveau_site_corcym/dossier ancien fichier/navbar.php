<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" media="screen" href="css/navbar.css">
    <title>Header</title>
</head>
<nav>
    <div class="header">
        <div class="logo">
            <div class="image-logo">
                <img src="./img/logo.png" alt="logo corcym">
            </div>
        </div>
        <div class="navbar">
            <div class="search">
                <div class="icon-loupe">
                    <img src="./img/icons8-loupe-64.png" alt="logo corcym">
                </div>
                <div>
                    <input class="input-search" type="search" name="search" value="" placeholder="Chercher">

                </div>
            </div>

            <div class="menu">

                <ul>
                    <li>
                        <a href="index.php">ACEUIL</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropbtn" href="pesee.php">PESÉE</a>
                        <div class="dropdown-content">
                            <a href="#">item1</a>
                            <a href="#">item2</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a id="desinfection" class="dropbtn" href="#">DÉSINFECTION</a>
                        <div class="dropdown-content">
                            <a href="#">item3</a>
                            <a href="#">item4</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropbtn" href="#">SOCIÉTÉ</a>
                        <div class="dropdown-content">
                            <a href="#">Informations</a>
                            <a href="#">Photos</a>
                            <a href="#">Contact</a>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="login">
                <img src="./img/1828466.png" alt="logo corcym">
            </div>
        </div>

    </div>
</nav>