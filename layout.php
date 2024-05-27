<?php
session_start();
// $_SESSION['start_time'] = time();
require_once 'Bdd.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>
        <?= isset($PageTitle) ? $PageTitle : "EDU-BTS" ?>
    </title>
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Ajoutez  ici vos autres tags head -->
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Ici, le contenu spécifique à chaque page sera inséré -->

</body>



</html>