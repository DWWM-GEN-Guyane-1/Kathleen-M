var toi; //Nominate player 1
var bot; // Nominate player 2

var pierre = 1


var pierrepPapierCiseaux = ["pierre", "papier", "ciseaux"]; //initialize array (game choice)
var choixBot = pierrepPapierCiseaux[Math.floor(Math.random() * pierrepPapierCiseaux.length)]; //"Bot" Random game choice

document.getElementById("btnRock").addEventListener("click", function () {
    document.getElementById("newGame");
}); //


function newGame() {
if (choixBot == ) {
    return "Tu as gagné !"
} else if (choixBot){
    return "Tu as perdu"
} else {
    return "Match nul"
}

}
//    var choixToi = document.getElementById("toiChoice").value; //"Toi" made a choice
//    choixToi.onclick = showAlert;
};

function showAlert() {
    alert("tata");
}

//     if choixVous == choixBot alors = 0