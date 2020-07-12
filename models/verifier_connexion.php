
<?php

require_once('connexion_Bdd.php');

$nom = $_POST['nom'] ;
$motdepasse= $_POST['pass'];

$sql = $connexion->query("SELECT * from utilisateur WHERE nom = '$nom' and mdp = '$motdepasse'");

if ($result = $sql->fetch() and $result['nom'] == $nom and $result['mdp'] == $motdepasse ) {
    session_start();
    $_SESSION["user"]  = $_POST['nom'] ;
    $_SESSION["motdepasse"]= $_POST['mdp'];

    header("location: /BZ-Algeria/views/gestion_utilisateurs.php");
}

else
{
       header("location: /BZ-Algeria/views/login.php");

}



?>