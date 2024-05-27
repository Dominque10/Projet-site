<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="rejoindre.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Nous Contacter</h2>
        <form action="process.php" method="POST">
            <div class="input-group">
                <label for="nom">Nom complet :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="input-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="sujet">Sujet :</label>
                <select id="sujet" name="sujet">
                    <option value="Demande d'informations">Demande d'informations</option>
                    <option value="Support technique">Support technique</option>
                    <option value="Partenariats">Partenariats</option>
                </select>
            </div>
            <div class="input-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <div class="input-group">
                <label for="conditions">J'accepte les conditions de confidentialité et les conditions d'utilisation</label>
                <input type="checkbox" id="conditions" required>
            </div>
            <div class="input-group">
                <label for="newsletter">S'abonner à la newsletter</label>
                <input type="checkbox" id="newsletter" name="newsletter">
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
    

    <div class="conversation-buble">
        <a href="https://wa.me/+330782592145" target="_blank">
            <img src="image/wha.webp"  alt="wha">
            </a>
        </div>

       


</body>
</html>
