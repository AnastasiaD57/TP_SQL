<?php

$dsn = "mysql://host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "demo";

$connexion = new PDO($dsn, $login, $password);

if(!empty($_POST)){

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $cv = $_POST["cv"];
    $dtNaissance = $_POST["dt_naissance"];
    $isAdmin = $_POST["isAdmin"];

    $sql = "INSERT INTO etudiants
            (prenom, nom, email, cv, dt_naissance, isAdmin, dt_mis_a_jour)
            VALUES
            ('$prenom', '$nom', '$email', '$cv', '$dtNaissance', '$isAdmin', NOW())";

    $nbLigne = $connexion -> exec($sql);
    if($nbLigne == 1){
        echo "L'étudiant a été ajouté";
    }

}

?>

<form method="post">
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
    </div>
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="cv">Cv</label> <br>
        <textarea name="cv" id="cv" cols="100" rows="50"></textarea>
    </div>
    <div>
        <label for="dt_naissance">Date de naissance</label>
        <input type="date" name="dt_naissance" id="dt_naissance">
    </div>
    <div>
        <label for="idAdmin">L'étudiant est-il administrateur?</label>
        <select name="isAdmin" id="isAdmin">
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>
    <input type="submit" value="Ajouter un étudiant">
</form>