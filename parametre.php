<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="param.css">
</head>
<body>
    <div class="container">
        <h1>Modifier le Profil</h1>
        <div class="profile-container">
        <label for="profile-upload" class="upload-icon">
        <img src="image/hero.jpg" alt="Profil" class="profile-pic">
        </label>
        <h3>Cliquer sur l'image pour modifier</h3>
       
        <input type="file" id="profile-upload" name="profilePicture" accept="image/*" style="display: none;" onchange="changeProfilePicture(event)">
    </div>


        <form action="#" method="post">
            <label for="username">Nom d'utilisateur*</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Mot de passe*</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="parametre">Email*</label>
            <input type="parametre" id="parametre" name="parametre" required><br><br>
            
            <button type="submit">Enregistrer</button>
        </form>
        
        <hr>
        
        <h1>Sécurité</h1>
        <form action="#" method="post">
            <label for="newPassword">Mot de passe actuel*:</label>
            <input type="password" id="newPassword" name="newPassword" required><br><br>

            <label for="newPassword">Nouveau mot de passe*</label>
            <input type="password" id="newPassword" name="newPassword" required><br><br>
            
            <label for="confirmPassword">Confirmer le nouveau mot de passe*</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
            
            <button type="submit">Changer le mot de passe</button>
        </form>
        
        <hr>
        
        <h1>Supprimer le Compte</h1>
        <h2>Supprimer votre compte EDU-BTS.</h2>
        <button class="sup" onclick="deleteAccount()">Supprimer le Compte</button>
    </div>

    <script>
        function deleteAccount() {
            var confirmation = confirm("Voulez-vous vraiment supprimer votre compte ?");
            if (confirmation) {
                // Faire quelque chose ici pour supprimer le compte
                alert("Votre compte a été supprimé !");
            }
        }
    </script>


<script>
    function changeProfilePicture(event) {
    if (event.target.files && event.target.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector('.profile-pic').setAttribute('src', e.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    }
}

</script>
</body>
</html>
