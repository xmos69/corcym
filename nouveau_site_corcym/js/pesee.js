//change l 'image et le texte en fonction du bouton cliquez
function changeImageTextPesee() {

    document.getElementById("image").src = "img/patchwork.png";

    document.getElementById("pesee").style.color = "rgb(19, 134, 150)";
    document.getElementById("hill-rom").style.color = "black";
    document.getElementById("linet").style.color = "black";

    document.getElementById("texteFondPesee").style.display = "block";
    document.getElementById("texteFondHillrom").style.display = "none";
    document.getElementById("texteFondLinet").style.display = "none";

}

function changeImageTextHillrom() {

    document.getElementById("image").src = "img/hillrom.png";

    document.getElementById("pesee").style.color = "black";
    document.getElementById("hill-rom").style.color = "rgb(19, 134, 150)";
    document.getElementById("linet").style.color = "black";

    document.getElementById("texteFondPesee").style.display = "none";
    document.getElementById("texteFondHillrom").style.display = "block";
    document.getElementById("texteFondLinet").style.display = "none";
}

function changeImageTextLinet() {

    document.getElementById("image").src = "img/linet.png";

    document.getElementById("pesee").style.color = "black";
    document.getElementById("hill-rom").style.color = "black";
    document.getElementById("linet").style.color = "rgb(19, 134, 150)";

    document.getElementById("texteFondPesee").style.display = "none";
    document.getElementById("texteFondHillrom").style.display = "none";
    document.getElementById("texteFondLinet").style.display = "block";
}