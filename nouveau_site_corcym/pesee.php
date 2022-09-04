<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesee</title>

  <?php

  include("includes/navbar.php");

  ?>

  <head>
    <link rel="stylesheet" type="text/css" href="css/pesee.css">
    <script src="js/pesee.js"></script>
  </head>

<body>
  <div class="general">




    <div class="titre">
      <div class="pesee">

        <button onclick="changeImageTextPesee()" id="pesee">Pesée</button>

      </div>

      <div class="hillrom">

        <button onclick="changeImageTextHillrom()" id="hill-rom">Hill-rom</button>
      </div>

      <div class="linet">

        <button onclick="changeImageTextLinet()" id="linet">Linet</button>
      </div>
    </div>

    <div class="affichage">
      <div class="image">
        <img width="600" height="400" src="img/patchwork.png" alt="patchwork de balance" id="image">

      </div>
      <div class="texte">
        <div class="imageFondTexte">
          <img src="img/poids2.png">
        </div>

        <div class="texteFondPesee" id="texteFondPesee">

          <h2>Préstations</h2><br>

          <h4> 1 - Contrôle des parcs de pesée hospitalier, clinique.</h4>
          <ul>
            <li>Pèse bébé</li><br>
            <li>Couveuse</li><br>
            <li>Pèse personne</li><br>
            <li>Plateforme de pesée</li><br>
            <li>Peson (rails, léve patient)</li><br>
            <li>Chaise de pesée</li><br>
            <li>Balance pharmacie classe II</li><br>
            <li>Balance de cuisine</li>
          </ul>
          <h4>2 - Contrôle des centres de dialyse (posibilité de travailler la nuit).</h4>
          <br>
          <h4>3 - Balances poids/prix des commerces et balances de précisions.</h4>
          <ul>
            <li>Balance de précision classe II (bijouterie, pharmacie de ville)</li> <br>
            <li>Balance poids/prix tous commerces</li> <br>
            <li>Balance industriel inferieure à 1 tonne</li>
          </ul>
        </div>

        <div class="texteFondHillrom" id="texteFondHillrom">
          <h2>Lit de pesée Hill-Rom</h2>
          <br />
          <p>Spécialisé dans les contrôles et les réparations pour la pesée des lits
            Hill-Rom depuis plus de 5 ans.</p>
          <p>Travail en partenariat avec la société Hill-Rom sur la région Rhône-Alpes.</p>
          <br />
          <img class="logo" src="img/logo-hillrom.png" alt="logo Hillrom" srcset="">
        </div>

        <div class="texteFondLinet" id="texteFondLinet">
          <h2>Lit de pesée Linet</h2>
          <br />
          <p>Spécialisé dans les contrôles et réparations pour la pesée des lits
            Linet depuis 1 ans. </p>
          <p>Travail en parternariat avec la société Linet sur la région Rhône Alpes.</p>
          <img class="logo" src="img/logo-linet.png" alt="logo Linet" srcset="">
        </div>


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