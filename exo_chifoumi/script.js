var toi; //Nominate player 1
var bot; // Nominate player 2

var pierrePapierCiseaux = ["pierre", "papier", "ciseaux"]; //initialize array (game choice)
var choixBot = pierrePapierCiseaux[Math.floor(Math.random() * pierrePapierCiseaux.length)]; //"Bot" Random game choice
function newGame() {
    if (choixBot == "pierre" && input == "pierre") {
        return "Match nul"
    } else if (choixBot == "pierre" && input == "papier") {
        return "Tu as gagné !"
    } else if (choixBot == "pierre" && input == "ciseaux") {
        return "Tu as perdu ! "
    } else if (choixBot == "papier" && input == "pierre") {
        return "Tu as gagné !"
    } else if (choixBot == "papier" && input == "papier") {
        return "Match nul"
    } else if (choixBot == "papier" && input == "ciseaux") {
        return "Tu as perdu ! "
    } else if (choixBot == "ciseaux" && input == "pierre") {
        return "Tu as perdu !"
    } else if (choixBot == "ciseaux" && input == "papier") {
        return "Tu as gagné !"
    } else if (choixBot == "ciseaux" && input == "ciseaux") {
        return "Match nul"
    } else
        return "Rejouer ?"
};


// function showAlert() {
//     alert("tata");
// }

//     if choixVous == choixBot alors = 0