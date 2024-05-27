<?php
require_once 'Bdd.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    
<div class="cadre">
            <div class="cadre_one">
                <h1>EDU-BTS</h1>
                <h2>ABONNEZ-VOUS</h2>
                <P>Pour profiter des formations EDU-BTS en illimité</P>
                <button type="submit" class="btn">S'ABONNER</button>
            </div>
        </div>

        <div class="back">
            <a href="index.php">
                <button  type="submit" class="back">Retourner au site</button>
            </a>
                </div>




    <div class="wrapper">
        <form action="inscription.php" method="POST">
            <h1>Inscription</h1>
            <div class=" input-box">
                <input type="text" name="nom" placeholder="Entrez votre nom" required>

                <!-- <i class='bx bxs-user'></i> -->
            </div>
            <div class="input-box">
                <input type="text" name="prenom" placeholder="Entrez votre prenom" required>

                <!-- <i class='bx bxs-user'></i> -->
            </div>
            <div class="input-box">
                <select name="choice" required>
                    <option  value="">Choisissez une option</option>
                    <option value="slam"> SLAM</option>
                    <option value="sisr"> SISR</option>
                </select>
            </div>
<?php

// Enregistrer le choix de formation dans la base de données pour cet utilisateur
// Vous devrez insérer ce choix dans une table appropriée associée à l'utilisateur
?>



     

            <div class="input-box">
                <input type="text" name="phone_number" placeholder="Entrez votre numero" required>
                <!-- <i class='bx bxs-user'></i> -->
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Entrez votre email" required>
                <!-- <i class='bx bxs-user'></i> -->
            </div>

            <div class="input-box">
                <input type="password" name="mdp" placeholder=" mot de passe" required>
                <!-- <i class='bx bxs-lock-alt'></i> -->
            </div>

            <button type="submit" class="btn">S'inscrire</button>

            <div class="register-link">
                <p>vous avez déja un compte? <a href="login.php">connectez-vous</a></p>
            </div>

        </form>
    </div>

    


    <?php
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $choice = $_POST["choice"];
        $phone_number = $_POST["phone_number"];
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];

        $servername = "localhost";
        $username = "root";
        $admin_password = "";
        $dbname = "edu_bts";


        try {
            $password = password_hash($mdp, PASSWORD_DEFAULT);
            $conn = new PDO('mysql:host=localhost; dbname=edu_bts', $username, $admin_password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = ("INSERT INTO users (nom, prenom, choice, phone_number, email, mdp) VALUES ('$nom', '$prenom', '$choice', '$phone_number', '$email', '$password')");

            $conn->exec($sql);
            header("Location:login.php");

        } catch (PDOException $e) {
            echo $sql .
                "<br/>"
                . $e->getMessage();
        }

        $conn = null;
    }

    ?>
</body>

</html>


