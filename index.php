<?php session_start(); ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Kursach_project</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- main.css -->
  <link rel="stylesheet" href="css/main8.css">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300i&display=swap" rel="stylesheet">
  <!-- imgs popup -->
  <link rel="stylesheet" href="imgs_work/magnific-popup.css">

</head>
<body>


<!-- Including DBconnect Code and putting query result content into variable -->
<?php
require 'connectDB.php';

  $query = "select * from index_html";

  $result = mysqli_query($bd, $query) or die ("Ошибка".mysqli_error($bd));
  $rows = mysqli_fetch_row($result);

?>

<?php
require 'connectDB.php';

if (isset($_POST['login']) and isset($_POST['password'])){

  $login = $_POST['login'];
  $password = $_POST['password'];

  $query = "select * from users where login='$login' and password='$password'";
  $result = mysqli_query($bd,$query) or die(mysqli_error($connection));
  $count =  mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION['login']= $login;
  }
  else{
    $fmsg = "Ошибка";
  }
}

if (isset($_SESSION['login'])){
  $login = $_SESSION['login'];
  echo '<script type="text/javascript"> window.location = "adminMainPanel2.php" </script>';
}

?>

<!-- social icons -->
  <div class="container-fluid info p-3" id="top-icons">
    <div class="row">
      <div class="col d-flex justify-content-between align-items-baseline flex-wrap">
        <div class="info-icons p-2">

          <a href="#" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="#" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#" class="mr-2 primary-color"><i class="fab fa-vk fa-2x"></i></a>
        </div>

        <h2 class="primary-color p-2 text-capitalize adaptive3">Г.Москва Ул.Пушкина Д.Колотушкина</h2>
      </div>
    </div>

  </div>
  <!-- end of social icons -->
  
  <!-- header section -->

  <header id="header">
    <div class="container">
      <div class="row height-90 align-items-center
      justify-content-center">
        <div class="col">

          <div class="banner text-center">
            <h1 class="display-1 text-capitalize w-50 mx-auto">
              <small class="adaptive">Ресторан</small> <br> <strong class="primary-color adaptive">"Clod Mone"</strong>
            </h1>
            <a href="#contact" class="btn main-btn rest-btn my-4 text-capitalize adaptive5">Забронировать</a>
          </div>
        </div>

      </div>
    </div>

  </header>

  <!-- end of header section -->

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg">
    
  <a href="#" class="navbar-brand primary-color adaptive2 ml-3">Ресторан "Clod Mone"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
    <div class="toggler-btn">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
    </div>
  

  </button>

  <!-- links -->

  <div class="collapse navbar-collapse" id="myNavbar">
    
    <ul class="navbar-nav mx-auto">
      
      <li class="nav-item">
        <a href="#about" class="nav-link text-capitalize">Главная</a>
      </li>

      <li class="nav-item">
        <a href="Menu.php" class="nav-link text-capitalize">Меню</a>
      </li>

      <li class="nav-item">
        <a href="Team.php" class="nav-link text-capitalize">Команда</a>
      </li>

      <li class="nav-item">
        <a href="#contact" class="nav-link text-capitalize">Контакты</a>
      </li>

    
  </div>
  <form class="form-inline d-none d-lg-block mr-5 form-btn">
      <a href="#auth" class="btn nav-btn text-capitalize popup" type="button">Авторизация</a>
    </form>

  </nav>

  <!-- end of navbar -->

<div class="hidden">
  <form id="auth" class="popup_fast py-5 pl-4 pr-5" style="right:38%;" method="POST">
          <input type="text" name="login" class="form-control" placeholder="Ваш логин">
          <p></p>
          <input type="password" name="password" class="form-control" placeholder="Ваш пароль">
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Войти</button>
  </form>
</div>
    

 <!-- about section -->
  <section id="about" class="py-5 background">


    <div class="container ">
      <div class="row">
        <div class="col-md-6 my-4 ">
          <h1 class="adaptive4 display-3 color-for-text">О нас</h1>
          <h2 class="adaptive3 color-for-text"><?php echo $rows[1]; ?></h2>
          <a href="" class="btn main-btn my-4 text-capitalize">learn more</a>
        </div>
        <div class="col-md-6 about-pictures my-4 d-none d-lg-block">

          <img src="<?php echo $rows[2]; ?>" alt="menu" class="img-1 img-thumbnail about-image">
          <img src="<?php echo $rows[3]; ?>" alt="menu" class="img-2 img-thumbnail about-image">
          <img src="<?php echo $rows[4]; ?>" alt="menu" class="img-3 img-thumbnail about-image">
          <img src="<?php echo $rows[5]; ?>" alt="menu" class="img-4 img-thumbnail about-image">
          <img src="<?php echo $rows[6]; ?>" alt="menu" class="img-5 img-thumbnail about-image">

        </div>
      </div>
    </div>

  </section>

  <!-- end of about section -->


    <!-- reviews section-->
  
  <section id="reviews" class="pb-2 pt-2 d-none d-lg-block background" style="border-top:solid 10px #c9c1ac;">
    <h1 style="text-align:center;" class="mb-4 mt-3">Отзывы</h1>
    
  <div id="sliderr" class="carousel slide mb-5" data-ride="carousel">
    
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
              <!-- image -->
              <div class="align-self-center ml-5">
                <img src="<?php echo $rows[8]; ?>" alt="" class="rounded-circle review-img">
              </div>

              <!-- text -->
              <div class="review-text px-5">
                <h2 class="text-capitalize mb-3 primary-color"><?php echo $rows[7]; ?></h2>
                <p class="lead text-muted"><?php echo $rows[9]; ?></p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- end of carousel item -->

      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
              <!-- image -->
              <div class="align-self-center ml-5">
                <img src="<?php echo $rows[11]; ?>" alt="" class="rounded-circle review-img">
              </div>

              <!-- text -->
              <div class="review-text px-5">
                <h2 class="text-capitalize mb-3 primary-color"><?php echo $rows[10]; ?></h2>
                <p class="lead text-muted"><?php echo $rows[12]; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of carousel item -->

      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto d-flex justify-content-between review-item py-3">
              <!-- image -->
              <div class="align-self-center ml-5">
                <img src="<?php echo $rows[14]; ?>" alt="" class="rounded-circle review-img">
              </div>

              <!-- text -->
              <div class="review-text px-5">
                <h2 class="text-capitalize mb-3 primary-color"><?php echo $rows[13]; ?></h2>
                <p class="lead text-muted"><?php echo $rows[15]; ?></p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- end of carousel item -->

    </div>

    <!-- carousel controls -->
    
    <a href="#sliderr" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>

    <a href="#sliderr" class="carousel-control-next" role="button" data-slide ="next">
      <span class="carousel-control-next-icon"></span>
    </a>

    <!-- end of carousel control -->
  </div>
  </section>

  <!-- end of reviews section -->


  

 <!-- contact section -->

  <section id="contact">
    <div class="container-fluid no-padding">
      
      <div class="row">

        <div class="col-md-6 my-3">
          
          <div class="embed-responsive embed-responsive-21by9 height-60">
            <iframe class = "embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.4973258036234!2d37.58084721579956!3d55.74986249968642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bb448da1135%3A0x96b00b2420f44f8e!2z0KDQtdGB0YLQvtGA0LDQvSDQmtC70L7QtCDQnNC-0L3QtQ!5e0!3m2!1sru!2sru!4v1576859910953!5m2!1sru!2sru" width=100%  frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          </div>
        </div>


        <div class="col-md-6 my-3 align-self-center">
          
          <div class="card text-center">
            
            <div class="card-header">
              <h1 class="text-uppercase adaptive6">Контакты</h1>
            </div>

            <div class="card-body">
              <form >
  
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-text">
                      <i class="fas fa-building"></i>
                    </span>
                  </div>
                  <h1 class="form-control form-control-lg adaptive7">Адрес - Г.Москва Ул.Пушкина Д.209</h1>
                </div>

                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-text">
                      <i class="fas fa-phone"></i>
                    </span>
                  </div>
                  <h1 class="form-control form-control-lg adaptive7">Телефон - 8 (931) 961-84-73</h1>
                </div>

                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="input-text">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                  <h1 class="form-control form-control-lg adaptive7">Почта - RestaurantSite@mail.ru</h1>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end of contact section -->

  <!-- Порфолио -->   
    
  <section class="py-2 background" style="border-bottom:solid 10px #c9c1ac" id="special-items">
    
    <div class="container mb-3 ">
      <h1 style="text-align: center;">Новости</h1>
      <div class="row parent-container">
        
        <!-- menu item -->
        <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
          <h3 style="border-bottom: solid 2px #d3325f"><?php echo $rows[16]; ?></h3>
          <div class="item-containerr">
            <h2>
              <?php echo $rows[17]; ?>
            </h2>

          </div>
        </div>

        <!-- menu item -->
        <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3 ">
          <h3 style="border-bottom: solid 2px #d3325f"><?php echo $rows[18]; ?></h3>
          <div class="item-containerr">
            <h2>
              <?php echo $rows[19]; ?>
            </h2>
          </div>
        </div>

         <!-- menu item -->
        <div class="col-10 mx-auto col-sm-6 col-lg-4 my-3">
          <h3 style="border-bottom: solid 2px #d3325f"><?php echo $rows[20]; ?></h3>
          <div class="item-containerr">
            <h2>
              <?php echo $rows[21]; ?>
            </h2>
          </div>
        </div>
        
      </div>
    </div>

  </section>

  <!-- social icons -->
  <div class="container-fluid info p-3">
    <div class="row">
      <div class="col d-flex justify-content-between align-items-baseline fles-wrap">
        <div class="info-icons p-2">

          <a href="#" class="mr-2 primary-color"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#" class="mr-2 primary-color"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="#" class="mr-2 primary-color"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#" class="mr-2 primary-color"><i class="fab fa-vk fa-2x"></i></a>
        </div>

        <h2 class="primary-color p-2 text-capitalize adaptive3">Г.Москва Ул.Пушкина Д.Колотушкина</h2>
      </div>
    </div>
  </div>
  <!-- end of social icons -->


 <!-- jquery -->
  <script src="js/jquery-3.4.1.min.js"></script>

  <!-- water ripples -->
  <script src="js/jquery.ripples-min.js"></script>

  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- bootstrap js -->

  <!-- imgs popup -->
  <script src="imgs_work/jquery.magnific-popup.min.js"></script>
  
    <!-- fonts js -->
  <script src="js/all.js"></script>

  <!-- js -->
  <script src="js/script2.js"></script>
</body>
</html>