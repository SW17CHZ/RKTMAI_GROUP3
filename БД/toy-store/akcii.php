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
        
            <a class="nav-link" href="index.php">Главная
            </a>
          <li class="nav-item">
		    <li class="nav-item active">
            <a class="nav-link" href="akcii.php">Акции</a>
			  <span class="sr-only">(current)</span>
			    </li>
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
if ($result = $mysqli->query('SELECT * FROM discounts')) {
    while($tmp = $result->fetch_assoc()) {
        $discounts[] = $tmp;
    }
    $result->close();
}
?>



 <div class="row">
    <?php foreach($discounts AS $discount) {?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $discount['img'];?>" alt="">
                <div class="caption">
              <h4>  <img src="https://icons.iconarchive.com/icons/yohproject/cute/32/star-icon.png">  <?php echo $discount['title'];?></h4> 
					
                  <p>  <img src="https://icons.iconarchive.com/icons/icons8/windows-8/32/Ecommerce-Discount-icon.png"> 
				  <?php echo $discount['intro'];?></p>	
                </div>
                <div class="ratings">
                 
                    <p>
                     </p>
                 </div>
            </div>
       </div>
	   </div>
   <?php } ?>
    
 <center> <p class="lead"> Остальные акции: </p> </center>


 
      <!-- /.col-lg-3 -->

      <img src="https://cdn.toy.ru/upload/iblock/7fa/502x182_fortnite.jpg" align= "left">
	  
	     <img src="https://cdn.toy.ru/upload/iblock/7db/502x182_makpeper.jpg" align= "right">
		 <img src="https://cdn.toy.ru/upload/iblock/9bb/502x182_pumpers.jpg" align= "right">
		<p><img src="https://cdn.toy.ru/upload/iblock/498/502x182_lego.jpg"></p>


        
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
