<?php
include 'layout.php';
$PageTitle = "EDU-BTS";


?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Long+cang|Montserrat:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet" />





<div class="vp-container">
    <section class="vp">
        <?php if (!isset($_SESSION['users_id'])) : ?>
            <form action="login.php" method="POST" class="form">
                <h2>Connexion</h2>
                <input type="email" name="email" placeholder="Entrer votre Email">
                <input type="password" name="mdp" placeholder="Entrer votre mot de passe">
                <button type="submit" class="btnn">Se connecter</button>

                <p class="link">Je n'ai pas de compte<br>
                    <a href="inscription.php">S'inscrire</a>
                </p>
                <p class="liw">Connectez-vous avec</p>

                <div class="icon">
                    <a href="https://www.google.com">
                        <img src="image/google.png" alt="google">
                    </a>

                    <a href="https://www.facebook.com">
                        <img src="image/facebook-2.png" alt="facebook">
                    </a>

                    <a href="https://twitter.com">
                        <img src="image/X.png" alt="Twitter">
                    </a>

                    <a href="https://www.linkedin.com">
                        <img src="image/lo-2.png" alt="lo-2">
                    </a>
                </div>
            </form>
        <?php endif; ?>



        <div class="conversation-buble">
            <a href="https://wa.me/+330782592145" target="_blank">
                <img src="image/wha.webp" alt="wha">
            </a>
        </div>

        <script>
            // Sélectionnez l'élément sur lequel vous souhaitez ajouter le comportement de clic
            var conversationBubble = document.querySelector('.conversation-buble');

            // Ajoutez un gestionnaire d'événements de clic
            conversationBubble.addEventListener('click', function() {
                // Sélectionnez l'élément à afficher/cacher
                var messagerie = this.querySelector('.messagerie');

                // Changez la visibilité en utilisant la propriété 'display'
                if (messagerie.style.display === 'none' || messagerie.style.display === '') {
                    messagerie.style.display = 'block';
                } else {
                    messagerie.style.display = 'none';
                }
            });
        </script>

        <div class="vp-content">
            <div class="icon-bars">
                <div class="fas">
                    <a href="accueil.php" class="active">
                        <i class="fas fa-home"></i>
                        <div class="Accueil">
                            <h4>Accueil</h4>
                        </div>
                    </a>
                    <a href="user.php" class="fas-two">
                        <?php if (isset($_SESSION['users_id'])) { ?>
                            <span><i class="fa-solid fa-circle"></i></span>
                            <i class="fa-solid fa-user-check">
                                <div class="user-online">

                                    <h5>En ligne</h5>

                                </div>

                            </i>

                        <?php } else { ?>
                            <i class="fas fa-user"></i>
                            <div class="user">
                                <i class="fa-solid fa-circle-user"></i>
                                <h5>utilisateur</h5>
                                <h6>connectez-vous</h6>
                            </div>
                        <?php } ?>
                        <!-- <div class="user">
                                <h4>Utilisateur</h4>
                            </div> -->
                    </a>

                    </a>
                    <a href="#" class="fas-three">
                        <i class="fas fa-users"></i>
                        <div class="users">
                            <h4>Communauté</h4>
                        </div>
                    </a>
                    <a href="#" class="fas-second">
                        <i class="fas fa-envelope"></i>
                        <div class="envelope">
                            <h4>Message</h4>
                        </div>
                    </a>
                    <a href="fichier.php" class="fas-four">
                        <i class="fas fa-file-download"></i>
                        <div class="dowload">
                            <h4>Fichier</h4>
                        </div>
                    </a>
                    <a href="#" class="fas-five">
                        <i class="fas fa-palette"></i>
                        <div class="palette">
                            <h4>Thème</h4>
                        </div>
                    </a>

                    <a href="parametre.php" class="fas-six">
                        <i class="fas fa-cog"></i>
                        <div class="cog">
                            <h4>Parametre</h4>
                        </div>
                    </a>

                    <a href="logout.php" class="fas-ten">
                        <i class="fas fa-sign-out-alt"></i>
                        <div class="out">
                            <h4>Déconnexion</h4>
                        </div>
                    </a>

                    </a>
                </div>

                <div class="bars">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="text-container">
        <h1>Explorez votre succès académique</h1>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let barsEL = document.querySelector('.bars');
            let iconBarsEL = document.querySelector('.icon-bars');

            barsEL.addEventListener('click', function() {
                iconBarsEL.classList.toggle('show');
            });
        });
    </script>
</div>

<div class="search">
    <input type="text" class="search-box" placeholder="Que souhaitez-vous explorer aujourd'hui?">
    <button class="search-button">Rechercher</button>
</div>

<div id="element1" class="formation">
    <div class="title-vp">
        <h5>Toutes nos Formations</h5>

    </div>

    <div class="recents">
        <p>formations recentes</p>
        <div class="card-principal">



            <?php


            $req = mysqli_query($conn, "SELECT * FROM toutes_formations");
            while ($row = mysqli_fetch_assoc($req)) {

            ?>


                <div class="card">
                    <a class="card-body" href="<?= $row['cours'] ?>">
                        <img src="<?= $row['img'] ?>" alt="">
                        <div class="description">
                            <h4 class="nom"><?= $row['nom'] ?></h4>
                            <p class="para"><?= $row['para'] ?></p>
                            <div class="upload">
                                <a href="">
                                    <i class="fa-solid fa-upload"></i>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="skip-formation">
        <!-- <button class="search-button">VOIR TOUTES LES FORMATIONS...</button> -->
    </div>
</div>

<div class="formation-second">
    <div class="title-vp">
        <h5>Nos dernières formations gratuites</h5>

    </div>

    <div class="recents">
        <div class="card-principal">

            <?php

            $req = mysqli_query($conn, "SELECT * FROM formations_gratuites");
            while ($row = mysqli_fetch_assoc($req)) {

            ?>

                <div class="card">
                    <div class="card-body">
                        <img src="image/<?= $row['img'] ?>" alt="">
                        <div class="description">
                            <h4 class="nom"><?= $row['nom'] ?></h4>
                            <p class="para"><?= $row['para'] ?></p>
                            <div class="upload">
                                <a href="">
                                    <i class="fa-solid fa-upload"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
</div>





<?php include 'footer.php'; ?>
<!-- Explorez votre succès académique avec notre plateforme de cours en ligne dédiée aux étudiants en BTS. Transformez vos défis en opportunités d'apprentissage et préparez-vous de manière optimale pour exceller dans vos examens. Bienvenue dans votre voyage vers la réussite éducative!" -->