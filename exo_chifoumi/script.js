var toi; //Nominate player 1
var bot; // Nominate player 2

var pierrePapierCiseaux = ["pierre", "papier", "ciseaux"]; //initialize array (game choice)
var choixBot = pierrePapierCiseaux[Math.floor(Math.random() * pierrePapierCiseaux.length)]; //"Bot" Random game choice
function newGame() {
    if (choixBot == "pierre" && toi == "pierre") {
        return "Match nul"
    } else if (choixBot == "pierre" && input == "papier") {
        return "Tu as perdu !"
    } else {
        return "Tu as gagné ! "
    }
};


// function showAlert() {
//     alert("tata");
// }

//     if choixVous == choixBot alors = 0