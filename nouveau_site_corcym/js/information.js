//change l 'image et le texte en fonction du bouton cliquez
function changeImageTextDescription() {
    document.getElementById("image1").src = "img/societe.png";
    document.getElementById("image1").style.display = "block";
    document.getElementById("image2-3").style.display = "none";


    document.getElementById("description").style.color = "rgb(19, 134, 150)";
    document.getElementById("specifications").style.color = "black";
    document.getElementById("personnes").style.color = "black";

    document.getElementById("texteFondDescription").style.display = "block";
    document.getElementById("texteFondSpecifications1").style.display = "none";
    document.getElementById("texteFondSpecifications2").style.display = "none";
    document.getElementById("texteFondPersonnes").style.display = "none";
    document.getElementById('texte').style.boxShadow = " 0 8px 16px 0 rgba(0, 0, 0, 0.2)";

}

function changeImageTextSpecifications() {
    document.getElementById("image1").style.display = "none";
    document.getElementById("image2-3").style.display = "block";
    document.getElementById("image2").src = "img/poids.jpg";
    document.getElementById("image3").src = "img/desinfection.jpg";


    document.getElementById("description").style.color = "black";
    document.getElementById("specifications").style.color = "rgb(19, 134, 150)";
    document.getElementById("personnes").style.color = "black";

    document.getElementById("texteFondDescription").style.display = "none";
    document.getElementById("texteFondSpecifications1").style.display = "block";
    document.getElementById("texteFondSpecifications2").style.display = "block";
    document.getElementById("texteFondPersonnes").style.display = "none";
    document.getElementById('texte').style.boxShadow = "none";
}

function changeImageTextPersonnes() {


    document.getElementById("image1").style.display = "none";
    document.getElementById("image2-3").style.display = "block";
    document.getElementById("image2").src = "img/logo_personne.png";
    document.getElementById("image3").src = "img/logo_personne.png";

    document.getElementById("description").style.color = "black";
    document.getElementById("specifications").style.color = "black";
    document.getElementById("personnes").style.color = "rgb(19, 134, 150)";

    document.getElementById("texteFondDescription").style.display = "none";
    document.getElementById("texteFondSpecifications1").style.display = "none";
    document.getElementById("texteFondSpecifications2").style.display = "none";
    document.getElementById("texteFondPersonnes1").style.display = "block";
    document.getElementById("texteFondPersonnes2").style.display = "block";
    document.getElementById("texteFondPersonnes").style.display = "block";
    document.getElementById('texte').style.boxShadow = "none";
    document.getElementById('texte').style.boxShadow = " none";
}