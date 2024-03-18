<?php 
    include "../components/core.php";
    $tovar = $_POST['id_tovar'];
    if(isset($_POST['deltovar'])){
        $link->query("DELETE FROM `product` WHERE `id` = '$tovar'");
        header("Location: ../admin_panel.php");
    }
?>