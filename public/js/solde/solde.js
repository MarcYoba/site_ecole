document.addEventListener('DOMContentLoaded', function () {

    const inputAvance = document.getElementById("solde_avance");

    function calculeReste() {
        let avance = parseInt(document.getElementById("solde_avance").value) || 0;
        let montant = parseInt(document.getElementById("solde_montant").value) || 0;

        document.getElementById("solde_reste").value = montant - avance;
    }

    if (inputAvance) {
        inputAvance.addEventListener('input', calculeReste);
    }

});

function MontantPensiont(){

    let donnees = {};
    let eleve = document.getElementById("solde_eleve").value;
    let classe = document.getElementById("solde_classe").value;

    donnees.eleve = eleve;
    donnees.classe = classe;

    fetch('/sg/pensiont/montant',{
        method:'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(donnees)
    })
    .then(response => response.json())
    .then(data => { 
        if (data.success) {
            document.getElementById('message-box').classList.remove('d-none'); 
            document.getElementById('solde_montant').value= data.success;
            if (parseInt(data.success) == 0) {
                document.getElementById('message-box2').innerText = "NB: l'eleve a un solde completement payé"; 
            }
        }
        console.log(data);    
    })
    .catch(error => {
        console.error(error);
    });
}