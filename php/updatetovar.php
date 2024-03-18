<?php 
   include "../components/core.php";

if(isset($_POST['updatetovar'])){
    $update_id = $_POST['update_id'];
    $update_name = $_POST['update_name'];
    $update_price = $_POST['update_price'];
    $update_description = $_POST['update_description'];
    $update_img = $_POST['update_img'];

    $query = $link->query("UPDATE `product` SET `name`='$update_name', `price`='$update_price', `description`='$update_description', `img`='$update_img' WHERE `id` = '$update_id'");
}
?>