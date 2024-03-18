<?php 
    include "components/core.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/TEAicon.png" type="image/x-icon">
    <title>TEA</title>
</head>
<body>

    <div class="menu">
    <div class="left">
        <div class="static">
        <div class="mainstr">
            <a href="index.php">
                <img src="img/icon/krest.png" alt="">
            </a>
        </div>
        <p><a href="index.html" class="glavnaya">Главная</a></p>
        <p><a href="menu.html" class="katalog">Каталог</a></p>
        <p><a href="dostavka.html" class="dostavka">Доставка и оплата</a></p>
        <p><a href="korzina.html" class="korzina">Корзина</a></p>
        </div>
    </div>
    <div class="right">
        <p class="p1">Каталог</p>
        <input type="text" placeholder="Введите интересующий вас товар" class="searchtext">
        <a href="menu.html" class="search"><img src="img/icon/search.png" alt=""></a>
        <p class="p2">Фильтры</p>
        <p class="p3">Здесь ничего нет...</p>

        <div class="line">
            <div class="line1"></div>
        </div>
    <?php
     $result = mysqli_query($link, "SELECT * FROM product");
     foreach($result as $row){

    
    echo '<div class="tovar1">
    <div class="left-tovar">
        <img src="img/tovar/'. $row['img'] .'" alt="">
    </div>
    <div class="right-tovar">
        <p class="name">Название: ' . $row['name'] .'</p>
        <p class="cena">Цена:' . $row['price'] .'</p>
        <p class="opisanie">Описание:' . $row['description'] .'</p>
        <div class="dobavit">Добавить в корзину</div>
    </div>
</div>';
    } ?>



    </div>
        
    </div>

    <footer>
        <div class="upfoot">
            <img src="img/TEA.png">
            <a href="index.html"><p>Главная</p></a>
            <a href="menu.html"><p>Каталог</p></a>
            <a href="dostavka.html"><p>Доставка и оплата</p></a>
            <a href="korzina.html"><p>Корзина</p></a>  
        </div>
      </footer>
</body>
</html>