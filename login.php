<?php
session_start();
require_once 'bdd.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $servername = "109.70.148.39";
        $username = "bassbant_edubts";
        $password = "}Pg94-4+MMW[";
        $dbname = "bassbant_edubts";
        $req = mysqli_query($conn, "SELECT id, mdp, choice FROM users WHERE email='$email'");
        $num_ligne = mysqli_num_rows($req);

        if ($num_ligne > 0) {
            $result = mysqli_fetch_assoc($req);
            if (password_verify($mdp, $result['mdp'])) {

                // je définie les variables de session
                $_SESSION['users_id'] = $result['id'];
                $_SESSION['users_email'] = $email;
                $_SESSION['choice'] = $result["choice"];


                // var_dump($_SESSION['choice']);
                header("Location:index.php");
                exit;
            } else {
                $erreur_message = "Mot de passe incorrect !";
            }
        } else {
            $erreur_message = "Adresse email incorrecte !";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Connexion</title>
</head>

<body>

    <div class="cadre">
        <div class="cadre_one">
            <h1>EDU-BTS</h1>
            <h2>ABONNEZ-VOUS</h2>
            <P>Pour profiter des formations EDU-BTS en illimité</P>
            <a href="payement.php">
                <button type="submit" class="btn">S'ABONNER</button>
            </a>
        </div>
    </div>

    <div class="back">
        <a href="index.php">
            <button type="submit" class="back">Retourner au site</button>
        </a>
    </div>

    <?php if (isset($erreur_message)) : ?>
        <p class='erreur'>
            <?php echo $erreur_message; ?>
        </p>
    <?php endif; ?>

    <div class="wrapper">



        <?php if (isset($_SESSION['users_id'])) { ?>
        <?php } else { ?>
            <form action="" method="POST">
                <h1>Connexion</h1>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-box">
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Se souvenir de moi</label>
                    <a href="#">Mot de passe oublié?</a>
                </div>

                <button type="submit" class="btn">Connexion</button>

                <div class="register-link">
                    <p>Vous n'avez pas de compte? <a href="inscription.php">Inscrivez-vous</a></p>
                </div>
            </form>



        <?php } ?>
    </div>


    <!-- <script>
    function redirectAndShowMessage() {
        var count = 3;
        // Mettre à jour le compteur toutes les secondes
        var countdownInterval = setInterval(async function() {
            count--;
            if (count <= 0) {
                clearInterval(countdownInterval);
                // window.location.href = "accueil.php";
                const response = await fetch(url, {
                    method: "POST", // *GET, POST, PUT, DELETE, etc.
                    headers: {
                        // "Content-Type": "application/json",
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: JSON.stringify(data), // body data type must match "Content-Type" header
                });
            }
        }, 1000);

        // Afficher un message de confirmation
        var messageElement = document.getElementById("message");
        messageElement.style.display = "block";
        messageElement.innerHTML = "Vous êtes bien connecté ! Redirection dans " + count + " secondes...";

        // Afficher le message pendant 3 secondes
        setTimeout(function() {
            messageElement.style.display = "none";
        }, 3000);
    }
    </script> -->
    <!-- onsubmit="redirectAndShowMessage(); return false; " -->
    <!-- <script>
    $(document).ready(function() {
        function verifierConnexion() {
            var email = document.getElementsByName("email")[0].value;
            var mdp = document.getElementsByName("mdp")[0].value;

            if (email === "email" && mdp === "mdp") {
                $("#message").text("Vous êtes bien connecté !").fadeIn(1000).delay(2000).fadeOut(1000);
                setTimeout(function() {
                    window.location.href = "accueil.php";
                }, 3000);
            } else {
                $("#message").text("Veuillez vous connecter.").fadeIn(1000).delay(2000).fadeOut(1000);
            }
        }

        $("form").submit(function() {
            verifierConnexion();
            return false; // Empêcher le formulaire de se soumettre normalement
        });
    });
    </script> -->


</body>

</html>