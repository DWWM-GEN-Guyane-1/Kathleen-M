var nombre = 0;
var i = 0;
console.log(nombre);
console.log(i);

function lireNombreEntierNombre() {
    nombre = Number(window.prompt('Entrez un nombre'));
}
lireNombreEntierNombre();
console.log(nombre);

window.alert('La table de multiplication de ce nombre est :');
for (var i = 0; i < 11; i++) {
    resultat = nombre * i;
    // console.log(resultat);
    document.getElementById('resultat').innerHTML += '<li>'+resultat+'</li>';
    
}


// function myFunction() {
//     document.getElementById("resultat").innerHTML = resultat;
//   }
// // div.innerHTML += 'Extra stuff';