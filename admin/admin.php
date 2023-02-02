<?php 
session_start();
include '../path.php';
include '../app/database/db.php'; 

$application = selectAll('application');

if(isset($_GET['delete'])) { 
  delete('application', $_GET['delete']);
}

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
  <div class="container-fluid mt-5 ">
<div class="application col-9 ">
<div class="row text-center ">
<div class="id col-2 fw-bold">ID</div>
    <div class="username col-4 fw-bold">Uername</div>
    <div class="link col-4 fw-bold">Channel link</div>
    <div class="del col-2 fw-bold">Action</div>
</div>
<?php foreach($application as $key => $post): ?>

  <div class="row text-center mt-1 border-top border-2 border-secondary ">

    <div class="id col-2 "><?=$key + 1;?></div>
    <div class="username col-4"><?=$post['username'];?></div>
    <div class="link col-4"><?=$post['link'];?></div>
    <div class="del col-2 "> <a href="?delete=<?=$post['id']?>">delete</a></div>

  </div>
<?php endforeach ;?>
</div>
</div>




</body>
</html>

