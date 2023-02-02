<?php 
session_start();
include 'path.php';
include 'app/database/db.php'; 


$channels = selectAll('channels');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="custom-font">
  <!--Адаптивное меню-->
  <?php include("app/include/header.php"); ?>

<?php if(isset($_SESSION['id'])): ?>

  <div class="col-11 col-md-6 ms-2 ms-md-4 mt-4 fw-semibold custom-title">
          <p>Нет вашего канала? <br><a href="add_chanel.php" class="ps-3 pe-3 higlight">Добавить?</a></p>
        </div>


<?php else: ?>
    <div class="col-11 col-md-6 ms-2 ms-md-4 mt-3 fw-semibold custom-title">
          <p> <span class="ps-3 pe-3 higlight">Каналы:</span></p>
        </div>
    <?php endif; ?>

  <div class="container">
    <div class="content row justify-content-center">
        <div class="main-content col-md-9">
        <?php foreach($channels as $key => $post): ?>

            <div class="post row mt-3 pt-2">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/For.png" alt="" class="img-thumbnail" draggable="false">
                </div>
                <div class="post-text col-12 col-md-8">
                    <h2 class="fw-bolder"><?=$post['name'];?></h2>
                    
                    <p class="fs-5"><?=$post['description'];?></p>
                    <a class="d-block text-start fs-5 no-link" href="<?=$post['link'];?>" target="_blank">
            <img src="assets/images/telegram_mini_logo.svg" alt="">
            <span class="text-decoration-underline">Открыть в Telegram</span>
          </a>
                   
                    

                </div>
            </div>
            <?php endforeach ;?>


        </div>
    </div>
  </div>


</body>
</html>