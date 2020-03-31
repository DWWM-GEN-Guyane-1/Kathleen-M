var toi; //Nominate player 1
var bot; // Nominate player 2
var pierrepPapierCiseaux = ["pierre", "papier", "ciseaux"]; //initialize array (game choice)
var choixBot = pierrepPapierCiseaux[Math.floor(Math.random() * pierrepPapierCiseaux.length)]; //"Bot" Random game choice

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