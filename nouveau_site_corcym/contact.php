<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html">
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
                    <input type="tel" id="telephone" name="telephone" placeholder="Téléphone" required>
                    <br>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <br>
                    <!-- <label for="question">Question</label> -->
                    <textarea name="question" id="question" cols="21" rows="5" placeholder="Votre question" required></textarea>
                </div>
        </div>
        <div class="bouton">
            <button class="valider" type="submit">Valider</button>
            <button class="annuler">Annuler</button>
        </div>
        </form>
    </div>
    <?php
    header('content-type: text/html; charset=utf-8');



    if (!empty($_POST["question"]) && !empty($_POST["sujet"])) {

        $pour = "xmos@free.fr";
        $sujet = htmlspecialchars($_POST['sujet']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $societe = htmlspecialchars($_POST['societe']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        $question = htmlspecialchars($_POST['question']);

        // definition de l entete du courrier attention bien mettre "\r\n" pour separer chaque propriété
        $entete = "MIME-Version: 1.0" . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        // Composition du message électronique en HTML
        $message  = '<html><body>';
        $message .= '<h3>ce message vous a été envoyé par la page contact du site corcym.fr</h3>';
        $message .= '<p>nom: <strong>' . $nom . '</strong></p>';
        $message .= '<p>Prénom: <strong>' . $prenom . '</strong></p>';
        $message .= '<p>Société: <strong>' . $societe . '</strong></p>';
        $message .= '<p>Téléphone: <strong>' . $telephone . '</strong></p>';
        $message .= '<p>Email: <strong>' . $email . '</strong></p>';
        $message .= '<p>Question: <strong>' . $question . '</strong></p>';
        $message .= '</body></html>';

        // Envoi de l'email
        if (mail($pour, $sujet, $message, $entete)) {
            $ok = "votre message à bien été envoyé";
            echo '<script type="text/javascript">window.alert("' . $ok . '");</script>';
        } else {
            $erreur = "Veuillez remplir tous les champs obligatoires";
            echo '<script type="text/javascript">window.alert("' . $erreur . '");</script>';
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