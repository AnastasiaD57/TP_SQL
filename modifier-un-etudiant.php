<?php

$dsn = "mysql://host=localhost;dbname=module6;charset=utf8";
$login = "root";
$password = "demo";

$connexion = new PDO($dsn, $login, $password);

$id = $_GET["id"];

$stmt = $connexion -> query("SELECT * FROM etudiants WHERE id = $id");

$etudiant = $stmt -> fetch(PDO::FETCH_ASSOC);

if(!empty($_POST)){

    $prenom = htmlentities($_POST["prenom"]);
    $nom = htmlentities($_POST["nom"]);
    $email = htmlentities($_POST["email"]);
    $cv = htmlentities($_POST["cv"]);
    $dtNaissance = htmlentities($_POST["dt_naissance"]);
    $isAdmin = htmlentities($_POST["isAdmin"]);

    $sql = "UPDATE etudiants
            SET prenom = '$prenom', nom = '$nom', email = '$email', cv = '$cv', dt_naissance = '$dtNaissance', isAdmin = '$isAdmin', dt_mis_a_jour = NOW()
            WHERE id = $id;
    ";

    $nbLigne = $connexion -> exec($sql);
    if($nbLigne == 1){
        echo "L'étudiant $id a été mis à jour";
    }

}

?>

<form method="post">
    <input type="hidden" value="<?= $etudiant["id"] ?>" name="id">
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="<?= $etudiant["prenom"] ?>">
    </div>
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?= $etudiant["nom"] ?>">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?= $etudiant["email"] ?>">
    </div>
    <div>
        <label for="cv">Cv</label> <br>
        <textarea name="cv" id="cv" cols="100" rows="50"><?= $etudiant["cv"] ?></textarea>
    </div>
    <div>
        <label for="dt_naissance">Date de naissance</label>
        <input type="date" name="dt_naissance" id="dt_naissance" value="<?= $etudiant["dt_naissance"] ?>">
    </div>
    <div>
        <label for="idAdmin">L'étudiant est-il administrateur?</label>
        <select name="isAdmin" id="isAdmin">
            <option value="<?= $etudiant["isAdmin"] ?>"></option>
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>
    <input type="submit" value="Modifier l'étudiant">
</form>