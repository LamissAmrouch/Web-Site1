<?php 

require_once('connexion_Bdd.php');
session_start();
session_unset();
session_destroy();

header("location: ../index.php");


 ?>