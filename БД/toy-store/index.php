<?php
session_start();
if($_GET['do'] == 'logout'){
 unset($_SESSION['admin']);
 session_destroy();
} 
 if($_SESSION['admin'] != "admin"){
 header("Location: login.php");    
exit; 
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>toy-shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Магазин игрушек</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Главная
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="akcii.php">Акции</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prt.php">Наши партнеры</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="company.html">О компании</a>
          </li>
        </ul>
		

<script type="text/javascript">
function Input(){
login_ok = false;
user_name = "";
password = "";
user_name = prompt("Логин","");
user_name = user_name.toLowerCase();
password = prompt("Пароль","");
password = password.toLowerCase();
if (user_name=="123" && password=="123") {
 login_ok = true;
 window.location = "admin.php";
}
if (login_ok==false) alert("Неверный логин или пароль!");
}
</script>

<form>
  <input type="button" value="Админ панель" onClick="Input()">
 </form>
 
	 <a class="nav-link" href="index.php?do=logout">Выйти</a> 
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">


    <?php
$mysqli = mysqli_init();
if (!$mysqli) {
    die('mysqli_init завершилась провалом');
}
 
if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Установка MYSQLI_INIT_COMMAND завершилась провалом');
}
 
if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Установка MYSQLI_OPT_CONNECT_TIMEOUT завершилась провалом');
}
 
if (!$mysqli->real_connect('localhost', 'root', 'root', 'toy-store')) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
?>


<?php
$products = array();
if ($result = $mysqli->query('SELECT * FROM products')) {
    while($tmp = $result->fetch_assoc()) {
        $products[] = $tmp;
    }
    $result->close();
}
?>



 <div class="row">
    <?php foreach($products AS $product) {?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
			
                <img src="<?php echo $product['img'];?>" alt="">
                <div class="caption">
                  <h4><?php echo $product['title'];?></h4>
					 <h4 class="pull-right">₽<?php echo $product['price'];?></h4> 
                  <p>  <img src="https://icons.iconarchive.com/icons/hopstarter/soft-scraps/24/Button-Info-icon.png"> 
				  <?php echo $product['intro'];?></p>	
                </div>
                <div class="ratings">
                    <p class="pull-right"> <img src="https://icons.iconarchive.com/icons/double-j-design/origami-colored-pencil/24/blue-talk-icon.png"> 
					<?php echo $product['reviews_count'];?>   отзывов</p>
                    <p>
                     </p>
                 </div>
            </div>
       </div>
	   
   <?php } ?>
   
   
</div>


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://blog.fromjapan.co.jp/en/wp-content/uploads/2019/06/AnimalCrossing_Banner-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://www.jeux-de-societe.info/wp-content/uploads/2019/11/Casse-tetes-en-bois.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://fyi.extension.wisc.edu/farmstress/files/2019/04/toy-tractor.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://birtop.ru/wp-content/uploads/2019/08/2b20a4868e85ff41eb967ea3037047ff.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Мафия</a>
                </h4>
                <h5>600 ₽</h5>
                <p class="card-text">Классическая настольная игра. Психологическая командная игра с криминально-детективным сюжетом.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://league.org.ru/images/stories/smeshariki_veselye_starty-5-s.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Смешарики</a>
                </h4>
                <h5>2.500 ₽</h5>
                <p class="card-text">Настольная игра для всей семьи! Любимые персонажи прямо у тебя дома. Рекомендуем играть не позднее 20:00.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="https://nintendobserver.com/wp-content/uploads/2018/09/CI_NSwitch_SuperSmashBrosUltimate_HardwareBundle_image950w-700x400.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Nintendo Switch</a>
                </h4>
                <h5>22.990 ₽</h5>
                <p class="card-text">Гибридная игровая консоль(приставка) для всех возрастов и игровых предпочтений. </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

 

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Магазин игрушек 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
 
</html>
