<?php 

 require_once('../models/connexion_Bdd.php');


if ( isset($_POST['nomm']) && isset($_POST['prenom_u']) && isset($_POST['nom_u'])  )
{

	$nomm = $_POST['nomm'];
	$prenom_u = $_POST['prenom_u'];

	$sql = "INSERT INTO utilisateur(nom, prenom, nom_utilisateur,mdp,mail) VALUES ('$nomm','$prenom_u',
    '$nom_u','$mdp','$mail_u')";
	$connexion->query($sql); 

}


header("location: login.php");

?>