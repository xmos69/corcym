<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script src="js/contact.js"></script>
</head>
<?php

include("includes/navbar.php");

?>

<body>
    <div class="general">
        <div class="info">
            <div class="telephone">
                <img src="./img/telephone_blanc.png" alt="icon tel" srcset="" width="28" height="38">
                <h2>TELEPHONE</h2>
                <h3>06 95 17 17 27</h3>
            </div>
            <div class="localisation">
                <img src="./img/Gps_blanc.png" alt="icon tel" srcset="" width="38" height="38">
                <h2>LOCALISATION</h2>
                <p>Parc Visionis,rue de l'industrie</p>
                <p>01090 Guereins, France</p>
            </div>
            <div class="email">
                <img src="./img/lettre_blanche.png" alt="icon tel" srcset="" width="50" height="38">
                <h2>EMAIL</h2>

                <p>contact@corcym.fr</p>
            </div>
        </div>
        <div class="formulaire">
            <form method="post">
                <div class="un">
                    <!-- <label class="radio_label" for="motif">Sujet</label>  -->
                    
                    <input type="radio" name="sujet" id="pesee" value="pesée" required>
                    <label class="radio" for="pesee">Pesée</label>
                    <input type="radio" name="sujet" id="desinfection" value="désinfection" required>
                    <label class="radio" for="desinfection">Désinfection</label>
                    <input type="radio" name="sujet" id="autre" value="autre" required>
                    <label class="radio" for="autre">Autre</label>
                                        
                </div>
                <div class="deux">
                    <!-- <label for="nom">Nom</label> -->
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>
                    <br>
                    <!-- <label for="prenom">Prénom</label> -->
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                    <br>
                    <!-- <label for="societe">société</label> -->
                    <input type="text" id="societe" name="societe" placeholder="Société">
                    <br>
                    <!-- <label for="telephone">téléphone</label> -->
                    <input type="tel" id="telephone" name="telephone" placeholder="Téléphone"required>
                    <br>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" placeholder="Email"required>
                    <br>
                    <!-- <label for="question">Question</label> -->
                    <textarea name="question" id="question" cols="21" rows="5" placeholder="Votre question"required></textarea>
                </div>
        </div>
        <div class="bouton">
            <button class="valider" type="submit">Valider</button>
            <button class="annuler">Annuler</button>
        </div>
        </form>
    </div>
    <?php




    if (isset($_POST["question"]) && isset($_POST["sujet"])) {


        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $societe = htmlspecialchars($_POST['societe']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        $question = htmlspecialchars($_POST['question']);

        $message = "ce message vous a été envoyé par le contact du site corcym.fr
            nom: " . $nom . "
            prénom: " . $prenom . "
            société: " . $societe . "
            téléphone: " . $telephone . "
            Email: " . $email . "
            Question: " . $question;

        $retour = mail("xmos@free.fr", $_POST["sujet"], $message, "From:xmos69@free.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
        if ($retour) {

            $message="votre message à bien été envoyé";
            echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

            
        }
        else {
            echo "<p>Veuillez remplir tous les champs obligatoires</p>";
        }
    } 

    ?>

</body>

<footer class="footer">
    <?php
    include("includes/footer.php");
    ?>
</footer>

</html>