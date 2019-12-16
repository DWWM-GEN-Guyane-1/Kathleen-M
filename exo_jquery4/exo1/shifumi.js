$(document).ready(function () {
    var rules = { 
        "pierre": {

            "pierre": 0,
            "feuille": 0,
            "ciseaux": 1,

        },

        "feuille": {

            "pierre": 1,
            "feuille": 0,
            "ciseaux": 0,

        },

        "ciseaux": {

            "pierre": 0,
            "feuille": 1,
            "ciseaux": 0,

        }

    }

    // Logique entiere du jeu
    if (joueur === bot)
        resultat = "Vous avez fait une egalité !";
    else if ((joueur === "Pierre" && bot === "Ciseaux") || (joueur === "Feuille" && bot === "Pierre") || (joueur === "Ciseaux" && bot === "Feuille"))
        resultat = "Vous avez gagné !!";
    else
        resultat = "Vous avez perdu !";
});

if (finJeu >= 4) {
    afficheur.sendMessage("Le jeu est fini</br>bot : " + scortO + "</br>Joueur : " + scortU);
    return;
}