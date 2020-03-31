Javascript Functions w/o counter: 

Step 1 : Initialize players "Bot" & "Toi" |OK|
Step 2 :  button game choice |OK|
Step 3 : Game choice bot = random of Pierre (1) Papier (2) Ciseaux (3) [pierrePapierCiseaux] |OK|
Step 4 : Game choice toi = Onclick.adEventListener of Button value "pierre" "papier" "ciseaux"
Step 5 : Compare choice Toi vs choice Bot (in the order)
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

Step 5 : Compare choice Toi vs choice Bot (in the order)
 - if button "Pierre" = 1 -> show alert "Match nul" + button "Continuer"
 - if button "Pierre" = 2 -> show alert "Tu as perdu !" & add 1 point to "Bot" + button "Continuer"
 - if button "Pierre" = 3 -> show alert "Tu as gagné !" & add 1 point to "Toi" + button "Continuer"

 - if button "Papier" = 1 -> show alert "Tu as gagné !" & add 1 point to "Toi" + button "Continuer"
 - if button "Papier" = 2 -> show alert "Match nul" + button "Continuer"
 - if button "Papier" = 3 -> show alert "Tu as perdu !" & add 1 point to "Bot" + button "Continuer"

 - if button "Ciseaux" = 1 -> show alert "Tu as perdu !" & add 1 point to "Bot" + button "Continuer"
 - if button "Ciseaux" = 2 -> show alert "Tu as gagné !" & add 1 point to "Toi" + button "Continuer"
 - if button "Ciseaux" = 3 -> show alert "Match nul" + button "Continuer"

** Info **
 * Button "Continuer" : Make disappear the alert while keeping the scores

