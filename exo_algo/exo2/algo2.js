$(document).ready(function () {
var N = 0;
function lireNombreEntierN() {
    N = Number(window.prompt("Entrez un nombre entre 10 et 20"));
}
lireNombreEntierN();

while (N < 10 || N > 20){
    lireNombreEntierN()
    if (N < 10) {
        window.alert('Plus grand !');
    }
    else if (N > 20) {
        window.alert('Plus petit !');
    }
}
lireNombreEntierN();
});