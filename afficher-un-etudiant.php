<?php

$id = $_GET["id"];

$dsn = "mysql://host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "demo";

$connexion = new PDO($dsn, $login, $password);

// var_dump($connexion);

$stmt = $connexion -> query("SELECT * FROM etudiants WHERE id = $id");

// var_dump($stmt);

$tableau = $stmt -> fetchAll(PDO::FETCH_ASSOC);

// var_dump($tableau);

if(0 < $id && $id < 11){
    echo "<table>
        <tr>
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>email</th>
            <th>cv</th>
            <th>dt_naissance</th>
            <th>isAdmin</th>
            <th>dt_mis_a_jour</th>
        </tr>
    ";

    foreach($tableau as $key => $value){
        echo "
            <tr>
                <td>$value[id]</td>
                <td>$value[prenom]</td>
                <td>$value[nom]</td>
                <td>$value[email]</td>
                <td>$value[cv]</td>
                <td>$value[dt_naissance]</td>
                <td>$value[isAdmin]</td>
                <td>$value[dt_mis_a_jour]</td>
            </tr>
        ";
    }

    echo "</table>";

}else{
    echo "L'étudiant $id n'existe pas";
}

// http://192.168.15.22/afficher-un-etudiant.php?id=1 affiche
// "id	prenom	nom	        email	                cv	    dt_naissance    isAdmin	    dt_mis_a_jour
//   1	Ana	    Danilov	Danilov.a@hotmail.fr	CV de Ana	1993-02-18	        1	    2024-01-28 10:49:19"

?>