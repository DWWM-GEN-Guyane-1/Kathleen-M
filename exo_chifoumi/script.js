var toi; //Nominate player 1
var bot; // Nominate player 2

var pierrePapierCiseaux = ["pierre", "papier", "ciseaux"]; //initialize array (game choice)
var choixBot = pierrePapierCiseaux[Math.floor(Math.random() * pierrePapierCiseaux.length)]; //"Bot" Random game choice
var choixToi = pierrePapierCiseaux;

function newGame() {
    if (choixBot == "pierre" && choixToi == "pierre") {
        return "Match nul"
    } else if (choixBot == "pierre" && choixToi == "papier") {
        return "Tu as perdu !"
    } else {
        return "Tu as gagné !"
    }
};


// function showAlert() {
//     alert("tata");
// }

//     if choixVous == choixBot alors = 0