<?php
session_start();
if (isset($_GET['del'])) {
    $id_del = $_GET['del'];
    if(isset($_SESSION['edu_bts'])){
        if(count($_SESSION['edu_bts']) == 1){
            unset($_SESSION['edu_bts']);
        }else{
            unset($_SESSION['edu_bts'][$id_del]);
        }
    } 
}
header("Location:panier.php");



