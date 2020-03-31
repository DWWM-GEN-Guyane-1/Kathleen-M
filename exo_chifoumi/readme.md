Javascript Functions w/o counter: 

Step 1 : Nominate players "Bot" & "Vous" |OK|
Step 2 : Game choice bot = random of Pierre (1) Papier (2) Ciseaux (3) [PPC] |OK|
Step 3 : Game choice vous = Onclick.adEventListener of Button value "pierre" "papier" "ciseaux"
Step 4 : Compare choice Vous vs choice Bot (in the order)
 - if button "Pierre" = 1 -> show alert "Match nul" + button "Rejouer"
 - if button "Pierre" = 2 -> show alert "Tu as perdu !" + button "Rejouer"
 - if button "Pierre" = 3 -> show alert "Tu as gagné !" + button "Rejouer"

 - if button "Papier" = 1 -> show alert "Tu as gagné !" + button "Rejouer"
 - if button "Papier" = 2 -> show alert "Match nul" + button "Rejouer"
 - if button "Papier" = 3 -> show alert "Tu as perdu !" + button "Rejouer"

 - if button "Ciseaux" = 1 -> show alert "Tu as perdu !" + button "Rejouer"
 - if button "Ciseaux" = 2 -> show alert "Tu as gagné !" + button "Rejouer"
 - if button "Ciseaux" = 3 -> show alert "Match nul" + button "Rejouer"

 ** Info **
 * Button "Continuer" : Restart the game

                                   ---------------------------------

Adding JavaScript functions with counter : 

Step 4 : Compare choice Vous vs choice Bot (in the order) & add 1 point to the winner
 - if button "Pierre" = 1 -> show alert "Match nul" + button "Continuer"
 - if button "Pierre" = 2 -> show alert "Tu as perdu !" + button "Continuer"
 - if button "Pierre" = 3 -> show alert "Tu as gagné !" + button "Continuer"

 - if button "Papier" = 1 -> show alert "Tu as gagné !" + button "Continuer"
 - if button "Papier" = 2 -> show alert "Match nul" + button "Continuer"
 - if button "Papier" = 3 -> show alert "Tu as perdu !" + button "Continuer"

 - if button "Ciseaux" = 1 -> show alert "Tu as perdu !" + button "Continuer"
 - if button "Ciseaux" = 2 -> show alert "Tu as gagné !" + button "Continuer"
 - if button "Ciseaux" = 3 -> show alert "Match nul" + button "Continuer"

** Info **
 * Button "Continuer" : Make disappear the alert while keeping the scores

