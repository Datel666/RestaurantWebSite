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
    
  <a href="#" class="navbar-brand text-uppercase primary-color adaptive2">Редактирование главной страницы</a>
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

  <section id="about" class="pl-5 pt-5 pb-5  background">

      <!-- about text section -->
    <div class="container pt-2" style="border: solid 2px #242424">
      <div class="row">
        <div class="col-md-5  mt-3 mb-3 ">

          <section id='main'>
            <div class="hidden">
             <form id="auth" class="popup_fast py-2 pl-4 pr-2" style="right:38%;" method="POST">
              <p>Графа "О нас" - текст</p>
          <textarea name="abouttt" cols=38 rows=5 class="form-control" placeholder="Введите текст здесь"></textarea> 
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Применить</button>
           </form>
          </div>
          </section>

        </div>

        <!-- end of about text section -->

        <div class="col-md-4  ">

          <!-- about photo section -->

          <section id='main'>
              <div class="hidden">
            <form id="auth" class="popup_fast py-2 mt-2 pl-4  " style="right:38%;" method="POST" enctype="multipart/form-data">
              <p>Графа "О нас" - фото</p>
                  <h5>Выберите фото</h5>
          <input type="file" name="image" class="form-control" placeholder="Ваш логин">
          <p></p>
          <h5>Номер фото на форме</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;"  name="num" value="one" /> Фото 1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="num" value="two" /> Фото 2<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="num" value="three" /> Фото 3<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="num" value="four" /> Фото 4<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="num" value="five" /> Фото 5<br />
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Загрузить</button>
            </form>
          </div>
          </section>

          <!-- end of about photo section -->
          
          

        </div>
      </div>

      <div class="row">
        <div class="col-md-5 ">

          <section id='main'>
<div class="hidden">
  <form id="auth" class="popup_fast py-2 pl-4" style="right:38%;" method="POST" enctype="multipart/form-data">
    <p>Карусель отзывов</p>
          <h5>Выберите фото</h5>
          <input type="file" name="imagee" class="form-control" placeholder="Ваш логин">
          <p></p>
          <h5>Укажите номер изменяемого отзыва</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="nume" value="one" /> Отзыв №1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="nume" value="two" /> Отзыв №2<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="nume" value="three" /> Отзыв №3<br />

          <input type="text" name="revName" size=40 placeholder="Имя ">
          <p></p>
          <textarea name="comment" cols=38 rows=5 placeholder="Отзыв до 120 символов"></textarea> 
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Загрузить</button>
  </form>
</div>
</section>

        </div>

         <div class="col-md-4  ">

          <section id='main'>
<div class="hidden">
  <form id="auth" class="popup_fast py-2 pl-4 " style="right:38%;" method="POST" enctype="multipart/form-data">
    <p>Блок новостей</p>
          <p></p>
          <h5>Укажите номер изменяемой новости</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numer" value="one" /> Новость №1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numer" value="two" /> Новость №2<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numer" value="three" /> Новость №3<br />
          <input type="text" name="date" size=40 placeholder="Дата: число и месяц">
          <p></p>
          <textarea name="newstext" cols=38 rows=5 placeholder="Текст новости"></textarea> 
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Загрузить новость</button>
  </form>
</div>
</section>



        </div>
       </div>


    </div>

  </section>

  

<?php 

if (isset($_POST['abouttt']) )
{

require 'connectDB.php';

  $perem = $_POST['abouttt'];
  $queryya = "update index_html set about = \"".$_POST['abouttt']."\" where id = '1'";
  $result = mysqli_query($bd, $queryya) or die ("Ошибка".mysqli_error($bd));  
}
?>

<?php 


if (isset($_POST['numer']) and isset($_POST['newstext']) and isset($_POST['date']))
{

require 'connectDB.php';


    switch($_POST['numer'] )
    {
        case 'one':
            $datee = 'newsdate1';
            $textt = 'newstext1';
            break;
        case 'two':
            $datee = 'newsdate2';
            $textt = 'newstext2';
            break;
        case 'three':
            $datee = 'newsdate3';
            $textt = 'newstext3';
            break;
    }

  $queryya = "update index_html set ".$datee." = \"".$_POST['date']."\" , ".$textt." = \"".$_POST['newstext']."\" where id = '1'";
  $result = mysqli_query($bd, $queryya) or die ("Ошибка".mysqli_error($bd));  
}
?>




<?php 

 if (isset($_FILES['image']) and isset($_POST['num'])){
$num = "";
require 'connectDB.php';

  switch($_POST['num'] )
    {
        case 'one':
            $num = 'img1';
            break;
        case 'two':
            $num = 'img2';
            break;
        case 'three':
            $num = 'img3';
            break;
        case 'four':
            $num = 'img4';
            break;
        case 'five':
            $num = 'img5';
            break;
    }

 $uploaddir = 'F:/openserver/OSPanel/domains/rabotai/img/dishes/';
 $uploadfile = $uploaddir . basename($_FILES['image']['name']);
 move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile);

  $query = "update index_html set ".$num." = \"/img/dishes/".$_FILES['image']['name'] ."\" where id = '1'";
  $result =mysqli_query($bd, $query) or die ("Ошибка".mysqli_error($bd));  
}
?>




<?php 

 if (isset($_FILES['imagee']) and isset($_POST['nume']) and isset($_POST['revName']) and isset($_POST['comment']))
 {
$num = "";
$name ="";
$text ="";
require 'connectDB.php';

  switch($_POST['nume'] )
    {
        case 'one':
            $num = 'review1_photo';
            $name = 'review1_name';
            $text = 'review1_text';
            break;
        case 'two':
            $num = 'review2_photo';
            $name = 'review2_name';
            $text = 'review2_text';
            break;
        case 'three':
            $num = 'review3_photo';
            $name = 'review3_name';
            $text = 'review3_text';
            break;
    }

 $uploaddir = 'F:/openserver/OSPanel/domains/rabotai/img/review_customers/';
 $uploadfile = $uploaddir . basename($_FILES['imagee']['name']);
 move_uploaded_file($_FILES['imagee']['tmp_name'],$uploadfile);

  $queryy = "update index_html set ".$num." = \"/img/review_customers/".$_FILES['imagee']['name'] ."\" , ".$name." = \"".$_POST['revName']."\" 
  ,".$text." = \"".$_POST['comment']."\" where id = '1'";
  $result =mysqli_query($bd, $queryy) or die ("Ошибка".mysqli_error($bd));  

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