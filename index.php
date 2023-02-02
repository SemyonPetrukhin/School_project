<?php 

include 'path.php';
include 'app/database/db.php'; 


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="custom-font">
  <!--Оранжевая спираль-->
  <div class="container-fluid d-none d-md-block background-img end-0">
      <img src="assets/images/spring.svg" class="img-fluid" alt="">
  </div>
  <!--Адаптивное меню-->

  <?php include("app/include/header.php"); ?>

  <main>
    <!--Блок с основной информацией-->
    <div class="container-fluid container-xxl main-section">
      <div class="row mt-md-3 flex-column">
        <div class="col-11 col-md-6 ms-2 ms-md-4 mt-3 fw-semibold custom-title">
          <p>Эффективная реклама <br> в <span class="ps-3 pe-3 higlight">Telegram</span></p>
        </div>
        <div class="col-9 col-md-5 mt-3 ms-2 ms-md-4 fs-4 fw-normal">
          <p>Запускаем рекламу с высокой конверсией, создаём и ведём каналы в Telegram</p>
        </div>
      </div>
      <div class="row justify-content-center justify-content-sm-start mt-3">
        <a href="https://t.me/formula_it" class="col-11 col-sm-4 col-md-3 col-lg-2 pt-3 pb-1 ms-sm-2 ms-md-4 text-center fw-semibold rounded-1 order-btn footer-link">
          <p>Все услуги</p>
        </a>
      </div>
      <div class="row justify-content-end">
        <a href="https://t.me/formula_it" target="_blank" class="col-1 d-none d-md-block position-sticky">
          <img src="assets/images/telegram_big_logo.svg" class="img-fluid" alt="">
        </a>
      </div>
      <!--Зелёная пирамидка-->
      <div class="d-none d-md-block background-img">
        <img src="assets/images/pyramid.svg" class="img-fluid " alt="">
      </div>
    </div>
    <!--Логотипы клиентов-->
    <div class="container-fluid container-xxl">
      <div class="row mt-4 mt-md-5 glassmorphism-logo align-items-center justify-content-around pt-3 pb-3">
        <div class="logo-box">
          <img src="assets/images/masterhub_logo.svg" class="img-fluid" alt="">
        </div>
        <div class="logo-box">
          <img src="assets/images/Skillbox_logo.svg.png" class="img-fluid" alt="">
        </div>
        <div class="logo-box">
          <img src="assets/images/hexlet_logo.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    <!--Статистика-->
    <div class="container-fluid container-xxl mt-3 mt-md-5">
      <div class="row justify-content-end">
        <div class="col-12 col-md-11 col-lg-9 col-xl-8 d-flex flex-row justify-content-between align-items-center pe-md-3 border-2 border-top border-dark">
          <div class="col-1 big-number">15+</div>
          <div class="col-7 col-md-7 col-xl-6 fs-4 text-end">
            <p class="fw-bold">Каналов</p>
            <p>В нашей сети, включая каналы партнёров</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-12 col-md-11 col-lg-9 col-xl-8 d-flex flex-row justify-content-between align-items-center pe-md-3 border-2 border-top border-dark">
          <div class="col-1 big-number">100+</div>
          <div class="col-7 col-md-7 col-xl-6 fs-4 text-end">
            <p class="fw-bold">Заказов</p>
            <p>Успешно реализованные рекламные кампании</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-12 col-md-11 col-lg-9 col-xl-8 d-flex flex-row justify-content-between align-items-center pe-md-3 border-2 border-top border-bottom border-dark">
          <div class="col-1 big-number">27K+</div>
          <div class="col-7 col-md-7 col-xl-6 fs-4 text-end">
            <p class="fw-bold">Человек</p>
            <p>Подписано на наши каналы, включая каналы партнёров</p>
          </div>
        </div>
      </div>
    </div>
    <!--Наши каналы-->
    <div class="container-fluid container-xxl mt-5">
      <div class="row">
        <p class="col-11 col-md-6 ms-2 ms-md-4 mt-3 fw-semibold custom-title">Наши каналы</p>
      </div>
      <!--Cинее колечко-->
      <div class="container-fluid background-img ">
        <img src="assets/images/ring.svg" class="img-fluid" alt="">
      </div>
    </div>
    <div class="container-fluid container-xxl mt-5">
      <div class="row justify-content-around">
        <!--Кароточка с каналом-->
        <div class="col-11 col-md-5 col-lg-5 col-xl-4 mt-3 mt-md-0 p-4 text-center channel-card">
          <!--Логотип канала-->
          <img src="assets/images/frontend_formula_logo.png" alt="" class="img-fluid border border-secondary rounded-circle w-25" draggable="false">
          <!--Название канала-->
          <h2 class="mt-3 fw-semibold">Frontend Formula</h2>
          <!--Категория-->
          <span class="fs-5">IT</span>
          <!--Описание-->
          <h3 class="text-start fw-semibold">О нас</h3>
          <p class="text-start fs-4">Канал для Frontend разработчиков. 
            Интересные статьи, задачи, готовые UI-макеты, обзоры библиотек и инструментов.</p>
          <a class="d-block text-start fs-5 no-link" href="https://t.me/frontend_formula" target="_blank">
            <img src="assets/images/telegram_mini_logo.svg" alt="">
            <span class="text-decoration-underline">Открыть в Telegram</span>
          </a>
          <a href="https://tgstat.ru/channel/@frontend_formula/stat" class="col-5 col-md-4 d-block text-decoration-none">
            <div class="col-12 pt-3 pb-2 mt-3 pt-md-2 pb-md-1 rounded-3 order-btn">
              <h4>Больше</h4>
            </div>
          </a>
        </div>
        <!--Кароточка с каналом-->
        <div class="col-11 col-md-5 col-lg-5 col-xl-4 mt-3 mt-md-0 p-4 text-center channel-card">
          <!--Логотип канала-->
          <img src="assets/images/backend_formula_logo.jpg" alt="" class="img-fluid border border-secondary rounded-circle w-25" draggable="false">
          <!--Название канала-->
          <h2 class="mt-3 fw-semibold">Backend Formula</h2>
          <!--Категория-->
          <span class="fs-5">IT</span>
          <!--Описание-->
          <h3 class="text-start fw-semibold">О нас</h3>
          <p class="text-start fs-4">Канал для backend-разработчиков. 
            Топовые статьи, кейсы, интересные задачи и обзоры инструментов.</p>
          <a class="d-block text-start fs-5 no-link" href="https://t.me/backend_formula" target="_blank">
            <img src="assets/images/telegram_mini_logo.svg" alt="">
            <span class="text-decoration-underline">Открыть в Telegram</span>
          </a>
          <a href="#" class="col-5 col-md-4 d-block text-decoration-none">
            <div class="col-12 pt-3 pb-2 mt-3 pt-md-2 pb-md-1 rounded-3 order-btn">
              <h4>Больше</h4>
            </div>
          </a>
        </div>
        <!--Кубик-->
        <div class="container-fluid d-none d-md-block end-0 background-img">
          <img src="assets/images/cube.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    <div class="container-fluid container-xxl">
      <div class="row justify-content-center mt-5">
        <a href="#" class="col-11 col-sm-6 col-md-5 col-lg-3 pt-3 pb-1 text-center fw-semibold rounded-1 partner-btn footer-link">
          <p>Каналы партнёров</p>
        </a> 
      </div>
    </div>
  </main>
   <?php include("app/include/footer.php"); ?>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>