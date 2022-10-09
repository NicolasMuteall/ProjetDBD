let tueur = document.getElementById('boxtueur');
    tueur.addEventListener('click',function(){
        window.location = 'personnage.php?role=tueur';
    });

    tueur.addEventListener('hover',function(){
        document.getElementsByTagName("body").style.cursor = "pointer";
    });

let survivant = document.getElementById('boxsurvivant');
    survivant.addEventListener('click',function(){
        window.location = 'personnage.php?role=survivant';
    });
