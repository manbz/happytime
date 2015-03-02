
  <?php
$serveur="localhost"; $login="root"; $mdp="root";
mysql_connect($serveur, $login, $mdp) or die(mysql_error());

if  (mysql_connect($serveur, $login, $mdp))
{echo 'Connexion réussie';}

else 
{echo 'Connexion impossible'.mysql_error();}

$base="SiteWeb";
mysql_select_db($base);

?>