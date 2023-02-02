<header>
    <nav class="navbar container-xxl navbar-expand-md navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand ms-2 ms-md-4 fw-bold" href="<?php echo BASE_URL ?>">SP<br>Digital<?php echo "_" . $_SESSION['username']; ?></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav fs-5 fw-semibold">
            
            <li class="nav-item p-3 ms-md-3 mt-2">
              <a class="custom-font menu-link" aria-current="page" href="../../admin/add-page.php">Добавить канал</a>
            </li>
            <li class="nav-item p-3 ms-md-3 mt-2">
              <a class="custom-font menu-link" aria-current="page" href="<?php echo BASE_URL . "blog.php";?>">Биржа</a>
            </li>
            <li class="nav-item p-3 ms-md-3 mt-2 d-md-none">
              <a class="custom-font menu-link" aria-current="page" href="login.php">Вход</a>
            </li>

          </ul>
        </div>
      </div>
      
          <?php if(isset($_SESSION['id'])):?>

            <a class="nav-link" href="<?php echo BASE_URL . "logout.php";?>">
              <div class="ps-4 pe-4 pb-1 fs-5 me-5 fw-semibold rounded-1 d-none d-md-block glassmorphism">
                <span class="text-center">Выход</span>
              </div>
            </a>
            <?php if($_SESSION['admin']):?>

              <a class="nav-link" href="<?php echo BASE_URL . "admin/admin.php";?>">
                <div class="ps-4 pe-4 pb-1 fs-5 me-5 fw-semibold rounded-1 d-none d-md-block glassmorphism">
                  <span>#ADMIN</span>
                </div>
              </a>

            <?php endif; ?>

          <?php else: ?>

            <a class="nav-link" href="<?php echo BASE_URL . "login.php";?>">
              <div class="ps-4 pe-4 pb-1 fs-5 me-5 fw-semibold rounded-1 d-none d-md-block glassmorphism">
                <span>Вход</span>
              </div>
            </a>

          <?php endif; ?>

          
           
    </nav>
  </header>