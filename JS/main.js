let tueur = document.getElementById('boxtueur');
    tueur.addEventListener('click',function(){
        window.location = 'personnage.php?role=tueur';
    });

let survivant = document.getElementById('boxsurvivant');
    survivant.addEventListener('click',function(){
        window.location = 'personnage.php?role=survivant';
    });

