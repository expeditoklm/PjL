// Récupération de l'élément select et des inputs
const selectOptions = document.getElementById('selectOptions');
const MotifE = document.getElementById('MotifE');
const HopitalD = document.getElementById('HopitalD');
const MotifP = document.getElementById('MotifP');
const PeriodeP = document.getElementById('PeriodeP');
const CauseD = document.getElementById('CauseD');
const LieuD = document.getElementById('LieuD');

// Fonction pour afficher ou masquer les inputs en fonction de l'option sélectionnée
selectOptions.addEventListener('change', function() {
    const selectedOption = selectOptions.value;
    if (selectedOption === 'Sortie Normale') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
    } else if (selectedOption === 'Contre Avis Médical') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
    } else if (selectedOption === 'Evacuation') {
        MotifE.style.display = 'block';
        HopitalD.style.display = 'block';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
    }
    else if (selectedOption === 'Permission') {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'block';
        PeriodeP.style.display = 'block';
        CauseD.style.display = 'none';
        LieuD.style.display = 'none';
    }
    else {
        MotifE.style.display = 'none';
        HopitalD.style.display = 'none';
        MotifP.style.display = 'none';
        PeriodeP.style.display = 'none';
        CauseD.style.display = 'block';
        LieuD.style.display = 'block';
    }
});









