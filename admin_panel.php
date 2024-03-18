<?php 
include "components/core.php"; 

if (!isset($_SESSION['user'])) {
    header('Location: log.php');
} else {
    if($_SESSION['user']['isAdmin'] != 1){
        header('Location: index.php');
    }
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/TEAicon.png" type="image/x-icon">
    <title>TEA</title>
</head>
<body>
    <div class="header">
        <img src="img/TEA2.png" alt="" >
        <div class="buttons-header">
            <a href="index.php" class="glavnaya">Главная страница</a>
            <a href="#" class="glavnaya">Добавить товар</a>
            <a href="#" class="glavnaya">Удалить товар</a>
            <a href="#" class="glavnaya">Обновить товар</a>
            <a href="#" class="glavnaya">Админ панель</a>
            <a href="logout.php" class="glavnaya">Выход</a>
        </div>
</div>
  <div class="container">
    <h1>Добавить товар</h1>
    <p>Пожалуйста, заполните эту форму, чтобы добавить товар.</p>
    <form method="post" action="php/addtovar.php" enctype="multipart/form-data">
    <label for="text"><b>Название товара</b></label>
    <input type="text" placeholder="Название товара" name="name" required>

    <label for="text"><b>Цена товара</b></label>
    <input type="text" placeholder="Цена товара" name="price" required>

    <label for="text"><b>Описание товара</b></label>
    <input type="text" placeholder="Описание товара" name="description" required>
    <hr>
    <label for="img"><b>Картинка товара</b></label>
    <input type="file" name="img">
    <hr>
    <button type="submit" name="addtovar">Добавить товар</button>
  </div>
</form>
<br>
<br>
<div class="container">
    <h1>Удалить товар</h1>
    <p>Пожалуйста, заполните эту форму, чтобы удалить товар.</p>
    <form method="post" action="php/deltovar.php">
    <label for="text"><b>Введите id</b></label>
    <input type="text" placeholder="id" name="id_tovar" required>
    <hr>
    <button type="submit" name="deltovar">Удалить товар</button>
  </div>
</form>
<br>
<br>
<div class="container">
    <h1>Обновить товар</h1>
    <p>Пожалуйста, заполните эту форму, чтобы обновить товар.</p>
    <form method="post" action="php/updatetovar.php">
    <label for="text"><b>Введите id</b></label>
    <input type="text" placeholder="id" name="update_id" required>

    <label for="text"><b>Новое название</b></label> 
    <input type="text" placeholder="Название товара" name="update_name" required>

    <label for="text"><b>Новая цена</b></label>
    <input type="text" placeholder="Цена товара" name="update_price" required>

    <label for="text"><b>Новое описание</b></label>
    <input type="text" placeholder="Описание товара" name="update_description" required>
    <hr>
    <label for="img"><b>Новая картинка</b></label>
    <input type="file" name="update_img">
    <hr>
    <button type="submit" name="updatetovar">Обновить товар</button>
</form>
<br>
<br>

</body>
</html>