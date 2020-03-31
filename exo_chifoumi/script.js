var vous;
var bot;

var pierrepPapierCiseaux = ["pierre", "papier", "ciseaux"];
    var choixBot = pierrepPapierCiseaux[Math.floor(Math.random() * pierrepPapierCiseaux.length)];//"Bot" Random choice

    function newGame() {
       document.getElementById ("pierrePapierCiseaux").addEventListener("vousChoice",newGame);
       var choixVous = document.getElementById("vousChoice").value; //"Vous" made a choice

       document.getElementById("vousChoice").value = ""; //Take value button
       choixVous.onclick = choixBot; //Collect Bot choice



//        choixVous.onclick = showAlert;
//     };

//     if choixVous == choixBot alors = 0

//     function showAlert()
// {
//   alert("Match nul");
// }

// if choixVous ==
