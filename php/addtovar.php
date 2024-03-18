<?php
    include "../components/core.php";
    
    if(isset($_POST['addtovar'])){
        $img = $_FILES['img'];
        $fileName = uniqid().'.'.substr($img['type'], 6);
        $uploadPath = '../img/tovar/'.$fileName;
        move_uploaded_file($img['tmp_name'],$uploadPath);
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $query = "INSERT INTO `product`(`name`, `price`, `description`, `img`) 
                  VALUES ('$name', '$price', '$description', '$fileName')";
        
        $link->query($query);
        header("Location: ../admin_panel.php");
    }
?>