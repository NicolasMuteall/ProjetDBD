let tueur = document.getElementById('boxtueur');
    tueur.addEventListener('click',function(){
        window.location = 'character.php?role=Tueur';
    });

let survivant = document.getElementById('boxsurvivant');
    survivant.addEventListener('click',function(){
        window.location = 'character.php?role=Survivant';
    });

