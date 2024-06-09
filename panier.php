<?php
include 'layout.php';
$PageTitle = "EDU-BTS";

// if (isset($_GET['del'])) {
//     $id_del = $_GET['del'];
//     if(isset($_SESSION['edu_bts'])){
//         if(count($_SESSION['edu_bts']) == 1){
//             unset($_SESSION['edu_bts']);
//         }else{
//             unset($_SESSION['edu_bts'][$id_del]);
//         }
//     }

// }


?>



<link rel="stylesheet" href="panier.css">


<div class="panier">
    <a href="boutique.php" class="lin">Boutique</a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php

            $total = 0;

            // Vérifier si la variable de session est définie avant de l'utiliser
            if (isset($_SESSION['bassbant_edu_bts'])) {
                echo array_sum($_SESSION['bassbant_edu_bts']);
                $ids = array_keys($_SESSION['bassbant_edu_bts']);
            }
            if (empty($ids)) {
            } else {
                //si oui
                // $conn = mysqli_connect($servername, $username, $password, $dbname);
                $produits = mysqli_query($conn, "SELECT * FROM produits WHERE id IN(" . implode(',', $ids) . ")");

                //liste des produits avec une boucle foreach
                foreach ($produits as $produit) :
                    //calculer le total (prix unitaire * quantité)
                    $total = $total + $produit['prix'] * $_SESSION['bassbant_edu_bts'][$produit['id']];

            ?>
                    <tr>
                        <td><img src="image/<?= $produit['img'] ?>"></td>
                        <td>
                            <?= $produit['nom'] ?>
                        </td>
                        <td>
                            <?= $produit['prix'] ?>
                        </td>
                        <td>
                            <?= $_SESSION['bassbant_edu_bts'][$produit['id']] // Quantité 
                            ?>
                        </td>
                        <td><a href="retirer_panier.php?del=<?= $produit['id'] ?>"><img src="image/delete.png" alt="delete"></a></td>
                    </tr>
            <?php endforeach;
            } ?>
            <tr class="total">
                <th>total : <?= $total ?>$</th>
            </tr>
        </table>
    </section>

</div>

<?php
include 'footer.php';
?>