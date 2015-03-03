<html>
    <head>
        <title>Quel est votre poids idéal?</title>
    </head>
    <meta charset="UTF-8">
    <body>
        
        <?php
        if (isset ($_POST['sexe']) && isset ($_POST['age']) && isset($_POST['taille']))
        {
            print "sexe ".$_POST['sexe'];
            if (sexe=="f")
                {
                $poids=0;
                $poids=$_POST['taille']-112 + ($_POST['age']*0.15);  
                }
            elseif (sexe=="m") 
                {
                $poids=0;
                $poids=($_POST['taille'])-110 + (($_POST['age'])*0.17);
                }
            print "Votre poids idéal est de ".$poids."kg.";
        }
        
        else
        {
            ?>
        <form method="POST" action="caca.php">
         <h3> Calculez votre poids idéal! </h3>
            <label for="age">Age :</label>
            <input name="age" type="range" min="20" max="60" id="age"> <br/>
            <label for="taille">Taille :</label> 
            <input name="taille" type="range" min="150" max="190" id="taille"> <br/>
            <label for="sexe">Sexe :</label>
            <input name="sexe" type="radio" id="m" value="m" checked>
            <label for="masculin">Masculin</label>
            <input name="sexe" type="radio" id="f" value="f">
            <label for="feminin">Feminin</label> <br/><br/>
            <input type="submit" name="envoi" id="envoi" value="Envoyer">
        </form>
        <?php
        }
          ?>
        
    </body>
</html>
