<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>rest project</title>
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
 

<?php
require 'connectDB.php';

  $query = "select * from team_html";

  $result = mysqli_query($bd, $query) or die ("Ошибка".mysqli_error($bd));

  $rows = mysqli_fetch_row($result);
?>

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
        <a href="index.php" class="nav-link text-capitalize">Главная</a>
      </li>

      <li class="nav-item">
        <a href="Menu.php" class="nav-link text-capitalize">Меню</a>
      </li>

      <li class="nav-item">
        <a href="#team" class="nav-link text-capitalize">Команда</a>
      </li>

      <li class="nav-item">
        <a href="#contact" class="nav-link text-capitalize">Контакты</a>
      </li>

    
  </div>

<form class="form-inline d-none d-lg-block mr-5 form-btn">
      <a href="#contact" class="btn nav-btn text-capitalize popup" type="button">Забронировать</a>
    </form>

  </nav>

  <!-- end of navbar -->





  <!-- team section -->

  <section id="team" class="py-5">
    
    <div class="container">

      <div class="row">
        <!-- team member -->
        <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
          
          <div class="card" style="height: 880px;">
            <img src="<?php echo $rows[1]; ?>" alt="" class="card-img-top" style="border-bottom: solid 2px; border-color: #242424">
            <div class="card-body">
              <div class="card-title">
                <h1 class="text-capitalize"><?php echo $rows[2]; ?></h1>
              </div>
              <h4 class="primary-color" class="text-capitalize" style="border-bottom: solid 2px; border-color: #242424"><?php echo $rows[3]; ?></h4>
              <h4 class="primary-color" class="text-capitalize"><?php echo $rows[10]; ?></h4>
            </div>

            <div class="card-footer team-icons d-flex justify-content-between">
              <a href="#"> <i class="fab fa-facebook fa-2x"></i></a>
              <a href="#"> <i class="fab fa-instagram fa-2x"></i></a>
              <a href="#"> <i class="fab fa-twitter fa-2x"></i></a>
              <a href="#"> <i class="fab fa-vk fa-2x"></i></a>
            </div>
          </div>
        </div>
        <!-- end of team member -->

        <!-- team member -->
        <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
          
          <div class="card" style="height: 880px;">
            <img src="<?php echo $rows[4]; ?>" alt="" class="card-img-top" style="border-bottom: solid 2px; border-color: #242424">
            <div class="card-body">
              <div class="card-title">
                <h1 class="text-capitalize"><?php echo $rows[5]; ?></h1>
              </div>
              <h4 class="primary-color" class="text-capitalize" style="border-bottom: solid 2px; border-color: #242424"><?php echo $rows[6]; ?></h4>
              <h4 class="primary-color" class="text-capitalize"><?php echo $rows[11]; ?></h4>
            </div>

            <div class="card-footer team-icons d-flex justify-content-between">
              <a href="#"> <i class="fab fa-facebook fa-2x"></i></a>
              <a href="#"> <i class="fab fa-instagram fa-2x"></i></a>
              <a href="#"> <i class="fab fa-twitter fa-2x"></i></a>
              <a href="#"> <i class="fab fa-vk fa-2x"></i></a>
            </div>
          </div>
        </div>
        <!-- end of team member -->


        <!-- team member -->
        <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
          
          <div class="card" style="height: 880px;">
            <img src="<?php echo $rows[7]; ?>" alt="" class="card-img-top" style="border-bottom: solid 2px; border-color: #242424">
            <div class="card-body">
              <div class="card-title">
                <h1 class="text-capitalize"><?php echo $rows[8]; ?></h1>
              </div>
              <h4 class="primary-color" class="text-capitalize" style="border-bottom: solid 2px; border-color: #242424"><?php echo $rows[9]; ?></h4>
              <h4 class="primary-color" class="text-capitalize"><?php echo $rows[12]; ?></h4>
            </div>

            <div class="card-footer team-icons d-flex justify-content-between">
              <a href="#"> <i class="fab fa-facebook fa-2x"></i></a>
              <a href="#"> <i class="fab fa-instagram fa-2x"></i></a>
              <a href="#"> <i class="fab fa-twitter fa-2x"></i></a>
              <a href="#"> <i class="fab fa-vk fa-2x"></i></a>
            </div>
          </div>
        </div>
        <!-- end of team member -->
      </div>
    </div>
  </section>
  <!-- end of team section -->

 

  
  

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
  
  <!-- js -->
  <script src="js/script.js"></script>

    <!-- fonts js -->
  <script src="js/all.js"></script>

  <!-- js -->
  <script src="js/script_for_menu.js"></script>

</body>
</html>