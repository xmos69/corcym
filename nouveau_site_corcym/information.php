<?php

/*include("includes/header.php");*/
include("includes/navbar.php");

?>

<head>
    <link rel="stylesheet" type="text/css" href="css/information.css">
    <script src="js/information.js"></script>
</head>

<body>
    <div class="general">

        <!-- bouttons de selection -->
        <div class="titre">
            <div class="description">

                <button onclick="changeImageTextDescription()" id="description">description</button>

            </div>

            <div class="specifications">

                <button onclick="changeImageTextSpecifications()" id="specifications">specifications</button>
            </div>

            <div class="personnes">

                <button onclick="changeImageTextPersonnes()" id="personnes">personnes</button>
            </div>
        </div>
        <!-- -------------------------------------- -->

        <div class="affichage">
            <div class="image" id="image">
                <img width="600" height="400" src="img/societe.png" alt="société" id="image1">

            </div>
            <div class="image2-3" id="image2-3">
                <div><img width="300" height="195" src="img/poids.jpg" alt="poids" id="image2"></div>
                <div><img width="300" height="195" src="img/desinfection.jpg" alt="desinfection" id="image3"></div>
            </div>


            <div class="texte" id="texte">

                <!-- div avec texte de l onglet description -->
                <div class="texteFondDescription" id="texteFondDescription">
                    <div>
                        <!-- <img class="imageFondTexte" src="img/poids2.png"> -->
                        <h3>Description</h3>
                        <br />
                        <p>La sociétée Corcym est situé dans la Zone indutriel de Guereins ,proche de
                            Villefranche en Beaujolais.Son local se trouve dans les locaux de la société Carina.
                            Spécialiste du contrôle de la pésée depuis 2014 ,dans le domaine médical (contrôle des lits , pesons, platefromes de pesée , chaises de pesée, balances, etc...)
                            <br />Prochainement ouverture d’une nouvel entité dans la desinfection Covid19 et puces de lit
                            <br />Nous intervenons sur tous le quart sud-est de la France.<br />
                            Principaux sites:
                            <br>
                        <ul>
                            <li>Hôpital saint Joseph Marseille</li><br>
                            <li>Hôpitaux d'annemasse, Sallanches, Alberville </li><br>
                            <li>Hôpitaux de Villefranche sur Saône ,Tarare, belleville, Beaujeu</li><br>
                            <li>HCL de Lyon pour la société Hill-rom et Linet</li>
                            <li>Groupe clinique du groupe ramsay, korian</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <!-- -------------------------------------- -->

                <!-- divs avec texte de l onglet specifications -->
                <div class="texteFondSpecifications" id="texteFondSpecifications">

                    <!-- texte du haut -->
                    <div class="texteFondSpecifications1" id="texteFondSpecifications1">
                        <!-- <img width="300" height="195" src="img/poids2.png"> -->
                        <h4>Vérificateur et réparateur </h4>
                        <p>spécialiste du contrôle de materiel de pesée medicale et poids/prix en classe
                            (II),(III),(IIII).<br />4.1 kg max pour les balances de precisions en classe
                            (II)<br />Nous ne controlons pas la classe (I).<br />Potance pour le contôle des pesons.<br />
                            Transmision d'un rapport format Excel en fin de contrôle.
                        </p>

                        <!-- texte du bas -->
                    </div>

                    <div class="texteFondSpecifications2" id="texteFondSpecifications2">
                        <!-- <img width="300" height="195" src="img/poids2.png"> -->
                        <h4>Vendeur et Installateur </h4>
                        <p>Prochainement System de désinfection pour le covid19 (autres virus) ainsi que les puces de lit.</p>

                    </div>

                </div>
                <!-- -------------------------------------- -->

                <!-- divs avec texte de l onglet personnes -->
                <div class="texteFondPersonnes" id="texteFondPersonnes">

                    <!-- texte du haut -->
                    <div class="texteFondPersonnes1" id="texteFondPersonnes1">

                        <h4>Fondateur, Directeur de la société Corcym </h4>
                        <br />
                        <p>Cyrille Alberola</p>

                        <!-- texte du bas -->
                    </div>

                    <div class="texteFondPersonnes2" id="texteFondPersonnes2">

                        <h4>Web master,Technicien de la société Corcym </h4>
                        <br />
                        <p>Xavier Marion</p>

                    </div>

                </div>
                <!-- -------------------------------------- -->

            </div>
        </div>

    </div>

</body>

<footer class="footer">
    <?php
    include("includes/footer.php");
    ?>
</footer>

</html>