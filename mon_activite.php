<?php 
session_start(); // Démarrer la session au début du script 
require_once 'header.php';
require_once 'bars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="activity.css">
    <title>Document</title>
</head>
<body>

<section class="activity">
    <div class="activity_one">
        <h1>utilisateur</h1>
        <img src="image/abon.jpg" alt="abon">
        <p>statut :</p>
        <p> Membre depuis :</p>
    </div>

    <div class="activity_one">
        <h1>Historique</h1>

        <?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edu_bts";

// Création de la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Définir le fuseau horaire pour PHP et MySQL
date_default_timezone_set('Europe/Paris');
mysqli_query($conn, "SET time_zone = '+02:00';"); // Ajustez selon le fuseau horaire

// Vérifiez si le temps de début de session est défini
if (isset($_SESSION['start_time'])) {
    $start_time = $_SESSION['start_time'];
    $end_time = time(); // Timestamp à la fin de la session
    $duration = $end_time - $start_time; // Durée en secondes

    // Convertir la durée en heures, minutes et secondes
    $hours = floor($duration / 3600);
    $mins = floor(($duration % 3600) / 60);
    $secs = $duration % 60;

    // Formater le temps de connexion pour l'afficher ou le stocker
    $temps_connexion = sprintf("%02d:%02d:%02d", $hours, $mins, $secs);
} else {
    // Si $_SESSION['start_time'] n'est pas défini, on pourrait définir une valeur par défaut ou gérer l'erreur
    $temps_connexion = "00:00:00"; // Valeur par défaut ou gestion de l'erreur
}

$date_connexion = date("Y-m-d");
$date_deconnexion = date("H:i:s");

// Requête SQL pour insérer les données dans la table connexion_log, incluant $temps_connexion
$sql = "INSERT INTO users (date_connexion, date_deconnexion) VALUES ('$date_connexion','$date_deconnexion')";

if (mysqli_query($conn, $sql)) {
    echo "Les données de connexion ont été enregistrées avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Exemple de récupération de données
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Nom</th><th>Date connexion</th><th>Date deconnexion</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["nom"]."</td><td>".$row["date_connexion"]."</td><td>".$row["date_deconnexion"];
    }
    echo "</table>";
} else {
    echo "Aucune donnée de connexion trouvée.";
}

mysqli_close($conn);
?>
</div>

    <div class="activity_one">
        <h1>Progression par formation</h1>

        <form action="traitement.php" method="post">
        <label for="select1">Option 1 :</label>
        <select name="select1" id="select1">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
            <option value="option3">Option 3</option>
        </select>

        <label for="select2">Option 2 :</label>
        <select name="select2" id="select2">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>

        <label for="texte">Texte :</label>
        <textarea name="texte" id="texte" placeholder="Saisissez votre texte ici"></textarea>
    </form>
    
    <div class="bttn"> 
        <button type="submit">Envoyer</button>
        </div>

</section>
</body>

<?php
include 'footer.php';
?>
</html>


