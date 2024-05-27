<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="payement.css">
</head>
<body>
    <div class="title">
            <h1>Choisissez votre type d'abonnement.</h1>
            <p>L'abonnement EDU-BTS est sans engagement et résiliable à tout moment</p>
    </div>

<section class="subscription-section">
    <div class="subscription-content">
        <h2>Toutes vos formations en illimité avec l'abonnement</h2>
        <p>Grâce à l'abonnement, accédez en illimité à toutes les formations EDU-BTS et développez vos passions à l'infini !</p>
        <ul>
            <li>Accès en illimité à tout EDU-BTS</li>
            <li>Minimum 5 nouvelles formations chaque mois</li>
            <li>Accès aux fichiers de travail</li>
            <li>Disponible sur ordinateur</li>
            <button  type="submit" class="btnn" >S'ABONNER A TOUT EDU-BTS</button>
        </ul>
    </div>
</section>


<div class="payment-container">
    <h2>Abonnement annuel</h2>
    <h4>Paiement annuel et renouvelable</h4>
    <p>349,00€ / an</p>
    <!-- Le bouton de paiement -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="ID_DU_BOUTON">
        <button  type="submit" class="btn" >Payer maintenant</button>
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    <h2>Abonnement mensuel</h2>
    <h4>Abonnement qui se renouvelle tous les mois</h4>
    <p>34,90€ / mois</p>
    <!-- Le bouton de paiement -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="ID_DU_BOUTON">
        <button  type="submit" class="btn" >Payer mantenant</button>
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</div>

</body>
</html>
