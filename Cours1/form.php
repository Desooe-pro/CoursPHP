<?php
// Démarrage de la session $_SESSION
session_start();

// Vérification dela soumission du formulaire via la methode post
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // $name = $_POST["name"]; // Sans vérifications
    // $name = isset($_POST["name"]); // Vérification de si ce n'est pas vide
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "" ;

    // Vérification que le champ n'est pas vide
    if ($name !== ""){
        // Stockage dans la session
        $_SESSION["Message"] = "Merci $name !";

        // Redirection vers la même page
        header("Location: form.php"); // Les ":" doivent toujours être collés à "Location"
        exit();
    } else {
        // Message d'erreur
        $_SESSION["Message"] = "Veuillez indiquer votre nom !";
    }
}








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro : Formulaire et sessions PHP</title>
</head>
<body>
    <?php if (isset($_SESSION["Message"])){
        echo "<p>" . htmlspecialchars($_SESSION["Message"]) . "</p>";
        unset($_SESSION["Message"]);
    }
    ?>
    <form action="form.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required placeholder="Tapez votre texte"/>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>