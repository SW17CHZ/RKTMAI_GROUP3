<?php
session_start();
$users = 'admin';
$pass = 'rktmai';
 if($_POST['submit']){
 if($users == $_POST['user'] AND $pass == ($_POST['pass']))
{
 $_SESSION['admin'] = $users;
 header("Location: index.php");
 exit;
 }
 
$users2 = '123';
$pass2 = '123';
 if($_POST['submit']){
 if($users2 == $_POST['user'] AND $pass2 == ($_POST['pass']))
{
 $_SESSION['123'] = $users;
 header("Location: admin.php");
 exit;
}

}

else echo '<p>Логин или пароль введены неверно!</p>';
} 
?>  
<br /> 

<center> <h1> Для входа на сайт введите логин и пароль: </h1> 
<form method="post">
Логин: <input type="text" name="user" /> <br /> 
Пароль: <input type="password" name="pass" /> <br />
<input type="submit" name="submit" value="Login" />
</form> 
</center>

  <style>
   body {
    background: #c7b39b url(https://wallpaperaccess.com/full/1172309.jpg); 
	 background-size: auto; 
   }
   
  </style>