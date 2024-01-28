<?php

$dsn = "mysql://host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "demo";

$connexion = new PDO($dsn, $login, $password);

// var_dump($connexion);

$stmt = $connexion -> query("SELECT * FROM etudiants");

// var_dump($stmt);

$tableau = $stmt -> fetchAll(PDO::FETCH_ASSOC);

// var_dump($tableau);

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

// http://192.168.15.22/afficher-tout-etudiant.php affiche:
//"id	prenom	nom	                email	                cv	            dt_naissance	isAdmin	dt_mis_a_jour
// 1	Ana	    Danilov	            Danilov.a@hotmail.fr	CV de Ana	    1993-02-18	        1	2024-01-28 10:49:19
// 2	Fred	Roblot-Coulanges	fred@gmail.com	        CV de Fred	    1978-12-26	        0	2024-01-28 10:53:12
// 3	Mathieu	Charles-Rolando	    Mathieu@gmail.com	    CV de Mathieu	1992-10-15	        0	2024-01-28 10:53:12
// 4	Najwa	Najwa	            Najwa@gmail.com	        CV de Najwa	    1996-12-26	        0	2024-01-28 10:59:50
// 5	Hadjer	xxx	                Hadjer@gmail.com	    CV de Hadjer	1999-10-15	        0	2024-01-28 10:59:50
// 6	JP	    xxx	                JP@gmail.com	        CV de JP	    1977-10-15	        0	2024-01-28 10:59:50
// 7	Feras	xxx	                Feras@gmail.com	        CV de Feras	    1999-10-15	        0	2024-01-28 10:59:50
// 8	Habib	xxx	                Habib@gmail.com	        CV de Habib	    1977-10-15	        0	2024-01-28 10:59:50
// 9	Derik	xxx	                Derik@gmail.com	        CV de Derik	    1975-10-15	        0	2024-01-28 10:59:50
// 10	Marizia	xxx	                Marizia@gmail.com	    CV de Marizia	1980-10-15	        0	2024-01-28 10:59:50"

?>