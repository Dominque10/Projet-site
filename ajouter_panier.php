<?php
session_start();
require_once 'Bdd.php';


//creer la session
if (!isset($_SESSION['bassbant_edu_bts'])) {
    //s'il n'existe pas une session on cree une et on mets un tableau à l'interieur
    $_SESSION['bassbant_edu_bts'] = array();

    
}

//recuperation de l'id dans le lien
if (isset($_GET['id'])) {//si un id a été envoyé alors :
    $id = $_GET['id'];
    //verifier grace a l'id  si le produit existe
    $produit = mysqli_query($conn, "SELECT * FROM produits WHERE id = $id");
    if (!$produit) {
        // si la requête a échoué
        die("Erreur dans la requête SQL : " . mysqli_error($conn));
    }
    if (mysqli_num_rows($produit) == 0) {
        // si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }
} else {
    // si $_GET['id'] n'est pas défini
    die("L'identifiant du produit n'est pas spécifié");
}
//ajouter le produit dans le panier 
if (isset($_SESSION['bassbant_edu_bts'][$id])) { // si le produit est déja dans le panier
    $_SESSION['bassbant_edu_bts'][$id]++; //Represente la quantité
} else {
    $_SESSION['bassbant_edu_bts'][$id] = 1;
   
}
 //redirection vres la page panier.php
 header("Location:boutique.php");
?>