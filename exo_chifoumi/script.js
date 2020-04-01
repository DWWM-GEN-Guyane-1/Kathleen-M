var toi = 0; //Initialize player 1
var bot = 0; //Initialize player 2
var nb = 0; //Initialize sleeve counter

var pierrePapierCiseaux = ["pierre", "papier", "ciseaux"]; //initialize array (game choice)

function newGame(input) {
    var choixBot = pierrePapierCiseaux[Math.floor(Math.random() * pierrePapierCiseaux.length)]; //"Bot" Random game choice
    alert("L'odinateur à choisi " + choixBot)

    if (choixBot == "pierre" && input == "pierre") {

        nb = nb + 1; // Sleeve counter
    } else if (choixBot == "pierre" && input == "papier") {

        nb = nb + 1; // Sleeve counter
        toi = toi + 1 // Player 1 victory counter
    } else if (choixBot == "pierre" && input == "ciseaux") {

        nb = nb + 1; // Sleeve counter
        bot = bot + 1 // Player 2 victory counter
    } else if (choixBot == "papier" && input == "pierre") {

        nb = nb + 1; // Sleeve counter
        toi = toi + 1 // Player 1 victory counter
    } else if (choixBot == "papier" && input == "papier") {

        nb = nb + 1; // Sleeve counter 
    } else if (choixBot == "papier" && input == "ciseaux") {

        nb = nb + 1; // Sleeve counter
        bot = bot + 1 // Player 2 victory counter
    } else if (choixBot == "ciseaux" && input == "pierre") {

        nb = nb + 1; // Sleeve counter
        bot = bot + 1 // Player 2 victory counter
    } else if (choixBot == "ciseaux" && input == "papier") {

        nb = nb + 1; // Sleeve counter
        toi = toi + 1 // Player 1 victory counter
    } else if (choixBot == "ciseaux" && input == "ciseaux") {

        nb = nb + 1; // Sleeve counter
        // } else
        //     return "Rejouer ?"
    };

    if (nb == 3) { // 3 sleeves = 1 game
        nb = 0; // reset counter

        if (bot > toi) // Alert info for player 1 : Bot win the game 
        {
            alert("Tu as perdu !");
        } else {
            if (bot < toi) // Alert info for player 1 : Toi win the game 
            {
                alert("Tu as gagné !");
            } else
                alert("Match nul"); // Alert info for player 1 : No one win the game
        }
        bot = 0; // Reset bot - player 2 counter
        toi = 0 // Reset toi - player 1 counter


        return 0;
    }
}