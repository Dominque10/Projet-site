<?php
include 'layout.php'; // Inclure le fichier de connexion à la base de données

?>
<link rel="stylesheet" href="panier.css">

<a href="panier.php">
    <?php
    // Vérifier si la variable de session est définie avant de l'utiliser
    if (isset($_SESSION['edu_bts'])) {
        echo array_sum($_SESSION['edu_bts']);
    } else {
        echo "votre panier est vide";
    }
    ?>
</a>

<section class="produits_list">

    <?php
    // Vérifier si la connexion à la base de données est établie
    if ($conn) {
        $req = mysqli_query($conn, "SELECT * FROM produits");
        while ($row = mysqli_fetch_assoc($req)) {
    ?>
            <form action="" class="produit">
                <div class="image_produit">
                    <img src="image/<?= $row['img'] ?>" alt="<?= $row['nom'] ?>">
                </div>
                <div class="content">
                    <h4 class="name"><?= $row['nom'] ?></h4>
                    <h2 class="price"><?= $row['prix'] ?> $</h2>
                    <a href="ajouter_panier.php?id=<?= $row['id'] ?>" class="id_produit">Ajouter au panier</a>
                </div>
            </form>
    <?php
        }
    } else {
        echo "Erreur de connexion à la base de données.";
    }
    ?>
</section>
<?php
include 'footer.php';
?>