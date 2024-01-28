<?php

$dsn = "mysql://host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "demo";

$connexion = new PDO($dsn, $login, $password);

// var_dump($connexion);

$id = 11;

$nbLignesAffectees = $connexion -> exec("DELETE FROM etudiants WHERE id = $id");

// var_dump($stmt);

if($nbLignesAffectees > 0){
    echo "Vous avez supprimé l'étudiant $id";
}else{
    echo "L'étudiant $id n'existe pas";
}

?>