console.log("hi");

function envoie(formulaire) {
if ( (document.getElementById('nom').value.length>0)
&&(document.getElementById('npa').value.length>0)
&&(document.getElementById('localite').value.length>0)
&&(document.getElementById('annee').value.length>0)
 ){
formulaire.submit();
} else
alert('IMPOSSIBLE, VOUS AVEZ OUBLIE DE REMPLIR DES CHAMPS OBLIGATOIRES');
}
