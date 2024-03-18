<!DOCTYPE html> 
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
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
            <a href="exlusive.html" class="glavnaya">Эксклюзивы</a>
            <a href="log.php" class="glavnaya">Вход/регистрация</a>
        </div>
        <div class="menu">
          <a href="menu.html">
            <img src="img/icon/menu.png" alt="">
          </a>
        </div>
    </div>
    <form action="php/register.php" method="post">
  <div class="container">
    <h1>Регистрация</h1>
    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Введите почту" name="email" required>

    <label for="login"><b>Логин</b></label>
    <input type="text" placeholder="Введите логин" name="login" required>

    <label for="password"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="password" required>

    <label for="password-repeat"><b>Повторите пароль</b></label>
    <input type="password" placeholder="Повторите пароль" name="password-repeat" required>
    <hr>
    <button name="reg">Регистрация</button>
  </div>
  </form>
  <div class="container signin">
    <p>У вас уже есть аккаунт?<a href="log.php">Вход</a>.</p>
  </div>
</body>
</html>