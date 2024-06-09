<?php
session_start();
if (isset($_GET['del'])) {
    $id_del = $_GET['del'];
    if(isset($_SESSION['bassbant_edu_bts'])){
        if(count($_SESSION['bassbant_edu_bts']) == 1){
            unset($_SESSION['bassbant_edu_bts']);
        }else{
            unset($_SESSION['bassbant_edu_bts'][$id_del]);
        }
    } 
}
header("Location:panier.php");



