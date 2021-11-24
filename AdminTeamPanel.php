<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Kursach_project</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- main.css -->
  <link rel="stylesheet" href="css/admin2.css">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300i&display=swap" rel="stylesheet">
  <!-- imgs popup -->
  <link rel="stylesheet" href="imgs_work/magnific-popup.css">

</head>
<body>


<!-- navbar -->

  <nav class="navbar navbar-expand-lg">
    
  <a href="#" class="navbar-brand text-uppercase primary-color adaptive2">Редактирование страницы команда</a>
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
        <a href="adminMainPanel2.php" class="nav-link text-capitalize">Главная</a>
      </li>

      <li class="nav-item">
        <a href="adminPanelMenu.php" class="nav-link text-capitalize">Меню</a>
      </li>

      <li class="nav-item">
        <a href="AdminTeamPanel.php" class="nav-link text-capitalize">Команда</a>
      </li>


  </div>
      <form>
        <a href="logout.php">Выйти</a>
      </form>

  </nav>

  <!-- end of navbar -->

  <section id="about" class="py-5 background">

      <!-- about text section -->
    <div class="container pt-2" style="border: solid 2px #242424">
      <div class="row">
        <div class="col-md-5  mt-3 mb-3 ">

          <section id='main'>
            <div class="hidden">
             <form id="auth" class="popup_fast py-2 pl-4 pr-5" style="right:38%;" method="POST" enctype="multipart/form-data">
              <p>Секция команда</p>
          <h5>Выберите фото</h5>
          <input type="file" name="imgur" class="form-control" >
          <p></p>
          <h5>Выберите номер редактируемой карты члена команды</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;"  name="na" value="one" /> Карта №1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="na" value="two" /> Карта №2<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="na" value="three" /> Карта №3<br />
          <p></p>
          <input type="text" name="FI" size=40 placeholder="Имя и Фамилия">
          <p></p>
          <input type="text" name="WHO" size=40 placeholder="Должность">
          <p></p>
          <textarea name="dopInfo" cols=38 rows=5 placeholder="Доп информация (до 110 символов)"></textarea> 
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Загрузить</button>
           </form>
          </div>
          </section>

        </div>
        
      </div>

        </div>
       </div>
    </div>

  </section>


<?php 

 if (isset($_FILES['imgur']) and isset($_POST['na']) and isset($_POST['dopInfo']) and isset($_POST['WHO']) and isset($_POST['FI']))
{
$who = "";
$fi = "";
$photo = "";
$dop = "";

require 'connectDB.php';

  switch($_POST['na'] )
    {
        case 'one':
            $who = 'who1';
            $fi = 'name1';
            $photo = 'photo1';
            $dop = 'dop1';
            break;
        case 'two':
            $who = 'who2';
            $fi = 'name2';
            $photo = 'photo2';
            $dop = 'dop2';
            break;
        case 'three':
            $who = 'who3';
            $fi = 'name3';
            $photo = 'photo3';
            $dop = 'dop3';
            break;
    }

 $uploaddir = 'F:/openserver/OSPanel/domains/rabotai/img/team/';
 $uploadfile = $uploaddir . basename($_FILES['imgur']['name']);
 move_uploaded_file($_FILES['imgur']['tmp_name'],$uploadfile);

  $query = "update team_html set ".$photo." = \"/img/team/".$_FILES['imgur']['name'] ."\" , ".$who." = \"".$_POST['WHO']."\" , ".$fi." = \"".$_POST['FI']."\" , ".$dop." = \"".$_POST['dopInfo']."\" where id = '1'";
  $result =mysqli_query($bd, $query) or die ("Ошибка".mysqli_error($bd));  
}
?>





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