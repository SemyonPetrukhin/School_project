<?php 

include("path.php"); 
include("app/controls/users.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="custom-font d-flex flex-column min-vh-100">
  <div class="wrapper flex-grow-1">
  <?php include("app/include/header.php"); ?>
<main>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="form-background justify-content-center d-inline-flex col-12 col-md-8 col-lg-6 p-5">
        <div class=" col-12 col-md-11 p-4 form-wrapper">
          <h2 class="fw-bolder mb-4">Регистрация</h2>
          <p class="mt-4 mb-4 err-text"><?=$errMsg?></p>
          <form method="post" action="registration.php">
            <div class="user-box">
              <input type="text" name="username" value="<?=$username?>" required>
              <label>@username</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" value="<?=$email?>" required>
                <label>Email</label>
              </div>
            <div class="user-box">
              <input type="password" name="password" required>
              <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="rep_password" required>
                <label>Repeat password</label>
              </div>
            <button class="sub-btn" type="submit" name="btn-reg">Принять</button>
            <p class="mt-4 form-text">Уже зарегистрированы? <br> <a href="login.php">Войти</a></p>
        
          </form>
      </div>
      </div>
      </div>
    </div>
  </main>
</div>
<?php include("app/include/footer.php"); ?>
  
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>