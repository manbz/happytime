
<?php
require ("connect.php");
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['psw'])) {
  extract($_POST);
  // on recupère le password de la table qui correspond au login du visiteur
  $sql = "select mdp from UTILISATEUR where mdp='.$psw';
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysql_fetch_assoc($req);

  if($data["psw"] != $psw) 
    {echo '<p>Mauvais login / password. Merci de recommencer</p>';
    //include('login.htm'); // On inclut le formulaire d'identification
    exit;
  }
  else {
    session_start();
    $_SESSION['login'] = $login;
    
    echo 'Vous etes bien logué';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
  }    
}
else {
  echo '<p>Vous avez oublié de remplir un champ.</p>';
   include('login.htm'); // On inclut le formulaire d'identification
   exit;
}
?>

