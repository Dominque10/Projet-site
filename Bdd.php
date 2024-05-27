<?php
$id = mysqli_connect("", "bassbant_edubts", "}Pg94-4+MMW[", "bassbant_edu_bts");


// j'inclus toutes les fonctions de ma page
// require_once 'catalogue.php';
// require_once 'bts_sio.php';
// require_once 'mon_activite.php';
// require_once 'aide.php';
// require_once 'a_propos.php';
// require_once 'client.php';
// require_once 'notification.php';
// require_once 'panier.php';
// require_once 'inscription.php';
// je peux ajouter autant de require_once nécessaire pour inclure toutes vos fonctions

// je me connectes à ma base de données
$servername = "109.70.148.39";
$username = "bassbant_edubts";
$password = "}Pg94-4+MMW[";
$dbname = "bassbant_edu_bts";

// Je Crée une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Je vérifie la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $conn->close();   me permet de mettre fin a la connexion avec la base de donnée
?>
