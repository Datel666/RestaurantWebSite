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
    
  <a href="#" class="navbar-brand text-uppercase primary-color adaptive2">Редактирование страницы меню</a>
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
              <p>Секция блюд с картинками</p>
          <h5>Выберите фото</h5>
          <input type="file" name="imagen" class="form-control" >
          <p></p>
          <h5>Номер фото на форме</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;"  name="numerus" value="one" /> Фото №1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numerus" value="two" /> Фото №2<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numerus" value="three" /> Фото №3<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numerus" value="four" /> Фото №4<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numerus" value="five" /> Фото №5<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="numerus" value="six" /> Фото №6<br />
          <p></p>
          <input type="text" name="dishname" size=40 placeholder="Название блюда">
          <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Загрузить</button>
           </form>
          </div>
          </section>

        </div>

        <!-- end of about text section -->

        <div class="col-md-4 mt-3 mb-3">

          
          <section id='main'>
<div class="hidden">
  <form id="auth" class="popup_fast py-2 pl-4 pr-5" style="right:38%;" method="POST" enctype="multipart/form-data">
    <p>Секция меню</p>
          <p></p>
          <h5>Редактируемый блок</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="n" value="one" /> Блок №1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="n" value="two" /> Блок №2<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="n" value="three" /> Блок №3<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="n" value="four" /> Блок №4<br />

          
          <input type="text" name="bloknamen" size=40 placeholder="Название блока. Прим - Десерты; Салаты">
          <p></p>
          <input type="text" name="dishtypen" size=40 placeholder="Тип блюда. Прим - Торт; Мороженое">
          <p></p>
          <input type="text" name="dishnamen" size=40 placeholder="Название блюда. Прим - Чизкейк">
          <p></p>
          <input type="text" name="dishprice" size=40 placeholder="Стоимость блюда. Прим - 500 р">
          <p></p>
          <h5>Выберите фото</h5>
          <input type="file" name="im" class="form-control" >


          <h5>Номер блюда в указанном блоке</h5>
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="nn" value="1" /> Блюдо №1<br />
          <input type="radio" onMouseDown="this.isChecked=this.checked;" 
  onClick="this.checked=!this.isChecked;" name="nn" value="2" /> Блюдо №2<br />
  <p></p>
          <button type="submit" class="btn" style="border: solid 1px;">Загрузить новость</button>
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


 if (isset($_FILES['im']) and isset($_POST['n']) and isset($_POST['nn']) and isset($_POST['dishprice']) and isset($_POST['bloknamen']) and isset($_POST['dishtypen']) and isset($_POST['dishnamen']))
{
$menutype = "";
$dishtype = "";
$dishname = "";
$dishprice = "";
$imgname = "";


require 'connectDB.php';

  switch($_POST['n'] )
    {
        case 'one':
            $menutype = 'menuType1';
            break;
        case 'two':
            $menutype = 'menuType2';
            break;
        case 'three':
            $menutype = 'menuType3';
            break;
        case 'four':
            $menutype = 'menuType4';
            break;
    }
    switch($_POST['nn'] )
    {
        case '1':
            if('one' == $_POST['n'])
            {
            $dishtype = 'dishtype1';
            $dishname = 'dishname1';
            $dishprice = 'price1';
            $imgname = "img1";
            }
            else if ('two' == $_POST['n'])
            {
            $dishtype = 'dishtype3';
            $dishname = 'dishname3';
            $dishprice = 'price3';
            $imgname = "img3";
            }
            else if ('three' == $_POST['n'])
            {
            $dishtype = 'dishtype5';
            $dishname = 'dishname5';
            $dishprice = 'price5';
            $imgname = "img5";
            }
            else if ('four' == $_POST['n'])
            {
            $dishtype = 'dishtype7';
            $dishname = 'dishname7';
            $dishprice = 'price7';
            $imgname = "img7";
            }
            break;
        case '2':
            if('one' == $_POST['n'])
            {
            $dishtype = 'dishtype2';
            $dishname = 'dishname2';
            $dishprice = 'price2';
            $imgname = "img2";
            }
            else if ('two' == $_POST['n'])
            {
            $dishtype = 'dishtype4';
            $dishname = 'dishname4';
            $dishprice = 'price4';
            $imgname = "img4";
            }
            else if ('three' == $_POST['n'])
            {
            $dishtype = 'dishtype6';
            $dishname = 'dishname6';
            $dishprice = 'price6';
            $imgname = "img6";
            }
            else if ('four' == $_POST['n'])
            {
            $dishtype = 'dishtype8';
            $dishname = 'dishname8';
            $dishprice = 'price8';
            $imgname = "img8";
            }
            break;
    }

 $uploaddir = 'F:/openserver/OSPanel/domains/rabotai/img/dishes/';
 $uploadfile = $uploaddir . basename($_FILES['im']['name']);
 move_uploaded_file($_FILES['im']['tmp_name'],$uploadfile);

  $query = "update menu_html set ".$imgname." = \"/img/dishes/".$_FILES['im']['name'] ."\" , ".$dishname." = \"".$_POST['dishnamen']."\" , ".$dishtype." = \"".$_POST['dishtypen']."\" , ".$dishprice." = \"".$_POST['dishprice']."\" , ".$menutype." = \"".$_POST['bloknamen']."\" where id = '1'";
  $result =mysqli_query($bd, $query) or die ("Ошибка".mysqli_error($bd));  
}
?>


<?php 

 if (isset($_FILES['imagen']) and isset($_POST['numerus']) and isset($_POST['dishname']))
{
$num = "";
$dishnamee = "";

require 'connectDB.php';

  switch($_POST['numerus'] )
    {
        case 'one':
            $num = 'dish1img';
            $dishnamee = 'dish1name';
            break;
        case 'two':
            $num = 'dish2img';
            $dishnamee = 'dish2name';
            break;
        case 'three':
            $num = 'dish3img';
            $dishnamee = 'dish3name';
            break;
        case 'four':
            $num = 'dish4img';
            $dishnamee = 'dish4name';
            break;
        case 'five':
            $num = 'dish5img';
            $dishnamee = 'dish5name';
            break;
        case 'six':
            $num = 'dish6img';
            $dishnamee = 'dish6name';
            break;
    }

 $uploaddir = 'F:/openserver/OSPanel/domains/rabotai/img/dishes/';
 $uploadfile = $uploaddir . basename($_FILES['imagen']['name']);
 move_uploaded_file($_FILES['imagen']['tmp_name'],$uploadfile);

  $query = "update menu_html set ".$num." = \"/img/dishes/".$_FILES['imagen']['name'] ."\" , ".$dishnamee." = \"".$_POST['dishname']."\"  where id = '1'";
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