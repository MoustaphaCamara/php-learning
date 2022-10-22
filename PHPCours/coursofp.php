<!-- cours Clément - comment se connecter à une base de données -->

<?php
// nos identifiants pour se connecter à notre wamp
$user="root";
$password="";
$dbname="villes_france";
$path = "mysql:host=localhost;dbname=$dbname;charset=utf8";
// localhost = lien de la base de données
$connexion = new PDO($path, $user, $password);
$requete = "SELECT * FROM departements";
$connexion -> query($requete);

var_dump($connexion);
?>