const  inputAvance = document.getElementById("solde_avance");

    inputAvance.addEventListener('input', calculeReste);

function calculeReste() {
    let avance = parseInt(document.getElementById("solde_avance").value);
    let montant = parseInt(document.getElementById("solde_montant").value);
    document.getElementById("solde_reste").value = montant - avance;
}


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
        }
            
    })
    .catch(error => {
        console.error(error);
    });
}