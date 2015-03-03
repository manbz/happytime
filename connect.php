<?php
$SERVEUR="localhost";
$LOGIN="root";
$MDP="root";
$MABASE="siteweb";
$CONNEXION=  mysql_connect($SERVEUR, $LOGIN, $MDP);
mysql_select_db($MABASE);
?>