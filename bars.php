<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="only screen and (max-width:500px)" href="./css/style.mobile.css">
    <link
        href="https://fonts.googleapis.com/css?family=Long+cang|Montserrat:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title>EDU-BTS</title>
</head>

<div class="icon-bars">
    <div class="fas">
        <a href="#" class="active">
            <i class="fas fa-home"></i>
            <div class="Accueil">
                <h4>Accueil</h4>
            </div>
        </a>
        <a href="#" class="fas-two">
            <i class="fas fa-user"></i>
            <div class="user">
                <h4>Utilisateur</h4>
            </div>
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
        <a href="#" class="fas-four">
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

        <a href="#" class="fas-six">
            <i class="fas fa-cog"></i>
            <div class="cog">
                <h4>Parametre</h4>
            </div>
        </a>

        <a href="#" class="fas-ten">
            <i class="fas fa-sign-out-alt"></i>
            <div class="out">
                <h4><span>Deconexion</span></h4>
            </div>
        </a>
    </div>

    <div class="bars">
        <i class="fas fa-bars"></i>
    </div>
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