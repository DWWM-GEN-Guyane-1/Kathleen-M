var toi; //Nominate player 1
var bot; // Nominate player 2

var pierrepPapierCiseaux = ["pierre", "papier", "ciseaux"]; //Nominate button game value
    var choixBot = pierrepPapierCiseaux[Math.floor(Math.random() * pierrepPapierCiseaux.length)];//"Bot" Random choice

    function newGame() {

       var choixToi = document.getElementById("toiChoice").value; //"Toi" made a choice
       choixToi.onclick = showAlert;

       function showAlert()
{
  alert("tata");
}


//     if choixVous == choixBot alors = 0

