<?php 
session_start();
include '../path.php';
include '../app/controls/add-admin-page.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="custom-font">
  

  <?php include("../app/include/header-admin.php"); ?>

  <main>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="form-background justify-content-center d-inline-flex col-12 col-md-8 col-lg-6 p-5">
        <div class=" col-12 col-md-11 p-4 form-wrapper">
          <h2 class="fw-bolder mb-4">Добавление канала</h2>
          <p class="mt-4 mb-4 err-text"><?=$errMsg?></p>
          <form method="post" action="add-page.php">
            <div class="user-box">
              <input type="text" name="name" value="" required>
              <label>Название канала</label>
            </div>
            <div class="user-box">
                <input type="text" name="link" value="" required>
                <label>Ссылка</label>
              </div>

              <div class="user-box">
                <input type="textarea" name="description" value="" required>
                <label>Описание</label>
              </div>
            
            <button class="sub-btn" type="submit" name="btn-addch">Добавить</button>
            
        
          </form>
      </div>
      </div>
      </div>
    </div>
  </main>


  </body>
</html>