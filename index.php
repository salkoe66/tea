<?php 
  include "components/core.php";
?>

<!DOCTYPE html>
<html lang="en">
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
            <a href="reg.php" class="glavnaya">Вход/регистрация</a>
        </div>
        <div class="menu">
          <a href="menu.php">
            <img src="img/icon/menu.png" alt="">
          </a>
        </div>
    </div>
    <div class="slider">
        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="text1">
                    <a href="">
                    <div class="novinka">
                        Новинки!
                    </div>
                    </a>
                </div>
              <div class="carousel-item active">
                <img src="img/newslider/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/newslider/2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/newslider/3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="text2">
                <p class="p1">КОМНАТА В </p>
                <p class="p2">СБОРЕ ПО </p>
                <p class="p3">ВЫГОДНОЙ </p>
                <p class="p4">ЦЕНЕ </p>
              </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="line">
        <div class="line1"></div>
    </div>

    <div class="tovars">
        <div class="idei">
            <div class="pic1">
              <img src="img/photo/kamod.jpg" alt="">
                <div class="dot1">Картина "Уют"</div>
                <div class="dot2">Комод "Белоснежка"</div>
                <div class="dot3">Торшер "Светила"</div>
            </div>
            <div class="pic1">
              <img src="img/photo/spalnya.jpg" alt="">
              <div class="dot4">Кровать "Чил"</div>
              <div class="dot5">Лампа "Светлячок"</div>
              <div class="dot6">Ковер "Мохнатый"</div>
            </div>
            <div class="pic1">
              <img src="img/photo/televizor.jpg" alt="">
              <div class="dot7">Комод "Белоснежка""</div>
              <div class="dot8">Стенка "Полупокер"</div>
              <div class="dot9">Полка "Хасан"</div>
            </div>
          </div>
    </div>

    <div class="line">
        <div class="line2"></div>
    </div>

    <div class="kartinki">
        <div class="toppic">
            <div class="pervaya">
              <a href="menu.html">
              <img src="img/photo/kreslo.jpg" alt="">
              <div class="kreslo">Кресла</div>
            </a>
            </div>
            <div class="pervaya">
              <a href="menu.html">
              <img src="img/photo/divan.jpg" alt="">
              <div class="kreslo">Диваны</div>
            </a>
            </div>
            <div class="vtoraya">
              <a href="menu.html">
              <img src="img/photo/skovoroda.jpg" alt="">
              <div class="kreslo2">Профессиональная посуда</div>
            </a>
            </div>
          </div>
          <div class="botpic">
            <div class="vtoraya">
              <a href="menu.html">
              <img src="img/photo/korzina.jpg" alt="">
              <div class="kreslo2">Текстиль</div>
            </a>
              
            </div>
            <div class="pervaya">
              <a href="menu.html">
              <img src="img/photo/skovoroda2.jpg" alt="">
              <div class="kreslo">Посуда</div>
            </a>
            </div>
            <div class="pervaya">
              <a href="menu.html">
              <img src="img/photo/vaza.jpg" alt="">
              <div class="kreslo">Декор</div>
            </a>
            </div>
          </div>
    </div>

    <footer>
      <div class="upfoot">
        <img src="img/TEA.png" alt="">
        <a href="index.html"><p>Главная</p></a>
        <a href="menu.html"><p>Каталог</p></a>
        <a href="dostavka.html"><p>Доставка и оплата</p></a>
        <a href="korzina.html"><p>Корзина</p></a>
        
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>