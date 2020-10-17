<!DOCTYPE html>
<html>
<head>
	<title>Управление БД</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
   body { 
    margin: 0; 
   }
   
   .parent {
    margin: 5%; /* Отступы вокруг элемента */
    background: #AFEEEE; /* Цвет фона */
    padding: 20px; /* Поля вокруг текста */
	
   } 

   .layer1 {
    float: left; 
    background: #E9967A; 
    border: 1px solid black; 
    padding: 21px; 
    margin-right: 20px; /
    width: 15%; /* Ширина блока */
	
   }
  
.layer2 {
    float: left;
    background: #FFDAB9; 
    border: 1px solid black; 
    padding: 10px; 
    margin-right: 20px; 
    width: 14%; 
   }

.layer3 {
    float: left;
    background: #DCDCDC; 
    border: 1px solid black; 
    padding: 10px; 
    margin-right: 20px; 
    width: 15%; 
   }
   
   .layer4 {
    float: left;
    background: #FFB6C1; 
    border: 1px solid black; 
    padding: 48px; 
    margin-right: 50px; 
   }
      .layer5 {
	float:left ;
    background: #FFA07A; 
    border: 1px solid black; 
    padding: 15px; 
    margin-right: 80px; 

   }

  </style>
</head>
<body>

 <div class="parent">
 <div class="layer1">
	
	<p><h3><strong>Добавить запись в БД: </strong></h3></p>
	<form method="post" action="admin.php">
		<input type="text" required name="idtov" placeholder = "id"><br><br>
		<input type="text" required name="titletov" placeholder = "Назв."><br><br>
		<input type="text" required name="imgtov" placeholder = "Ссылка на изобр:"><br><br>	 
		<input type="text" required name="opistov" placeholder = "Описание"><br><br>
		<input type="text" required name="pricetov" placeholder = "Стоимость"><br><br>
		<input type="text" required name="reviewstov" placeholder = "Кол-во отзывов"><br><br>	
		<input type="text" required name="scoretov" placeholder = "Оценка"><br><br>	
		<input type="submit" required name="but" value="Добавить"><br><br><br>
	</form>
</div>
<div class="layer3">
	<p><h3><strong>Редактировать запись в БД: </strong></h3></p>
	<form method="post" action="admin.php">
		<input type="text" required name="idtovToChange" placeholder = "id"><br><br>
		<input type="text" required name="titletovToChange" placeholder = "Назв."><br><br>
		<input type="text" required name="imgtovToChange" placeholder = "Ссылка на изобр:"><br><br>
		<input type="text" required name="opistovToChange" placeholder = "Описание"><br><br>
		<input type="text" required name="pricetovToChange" placeholder = "Стоимость"><br><br>
		<input type="text" required name="reviewstovToChange" placeholder = "Кол-во отзывов"><br><br>
		<input type="text" required name="scoretovToChange" placeholder = "Оценка"><br><br>
		<input type="submit" required name="but2" value="Изменить"><br><br><br>
	</form>
	</div>
 <div class="layer2">
	<center> <p><h3><strong>Удалить запись из БД: </strong></h3></p>
	<form method="post" action="admin.php">
		<input type="text" name="idtov" placeholder = "id"><br><br>
		<input type="submit" name="but1" value="Удалить"><br><br><br>
	</form>
	</center>
</div>
 
	 <div class="layer4">
	<p><h3><strong>Вывести таблицу из БД: </strong></h3></p>
	<form method="post" action="admin.php">
		<input type="submit" name="but3" value="Вывести таблицу">
	</form>
	</div>
		 <div class="layer5">
	 <p><a href="index.php">Перейти на главную страницу</a></p>
</div>
<pre>

<?php

$link = mysqli_connect('localhost', 'root', 'root', 'toy-store');



if(isset($_POST['but']))
	
{
	$id = $_POST['idtov']; 
	$title = $_POST['titletov'];
	$img = $_POST['imgtov'];
	$intro = $_POST['opistov']; 
	$price = $_POST['pricetov'];
	$reviews_count = $_POST['reviewstov'];
	$reviews_score = $_POST['scoretov'];

	$query = "INSERT INTO `products` (`id`,`title`,`img`,`intro`,`price`,`reviews_count`,`reviews_score`) VALUES ('$id','$title','$img','$intro','$price','$reviews_count','$reviews_score')";
 	$result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>"; 
    }
    mysqli_close($link);
}

if(isset($_POST['but1']))
{
	$idDel = $_POST['idtov'];
	$query1 = "DELETE FROM `products` WHERE `products`.`id` = $idDel";
	$result1 = mysqli_query($link, $query1) or die ("Ошибка " . mysqli_error($link)); 
    if($result1)
    {
        echo "<span style='color:red;'>Запись удалена</span>";
    }
    mysqli_close($link);
}

if(isset($_POST['but2']))
{
	$idChange = $_POST['idtovToChange'];
	$titleChange = $_POST['titletovToChange'];
	$imgChange = $_POST['imgtovToChange'];
	$introChange = $_POST['opistovToChange'];
	$priceChange = $_POST['pricetovToChange'];
	$reviews_countChange = $_POST['reviewstovToChange'];
	$reviews_scoreChange = $_POST['scoretovToChange'];

	$query2 = "UPDATE `products` SET `title` = '$titleChange', `img` = '$imgChange', `intro` = '$introChange', `price` = '$priceChange', `reviews_count` = '$reviews_countChange',`reviews_score` = '$reviews_scoreChange' WHERE `products`.`id` = $idChange";
	$result2 = mysqli_query($link, $query2) or die ("Ошибка " . mysqli_error($link)); 
    if($result2)
    {
        echo "<span style='color:green;'>Запись отредактирована</span>";
    }
    mysqli_close($link);
}

if(isset($_POST['but3']))
{
	$sql = "SELECT * FROM `products`";
	$result = mysqli_query($link, $sql);
	
    $rows = mysqli_num_rows($result); 
     
    echo "<table><tr><th>Id |</th><th>Название |</th><th>Изобр. |</th><th>Описание |</th><th>Стоимость |<th>Просмотры |</th> <th>Оценка |</th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
	
	

}

?>
</pre>
</body>
</html>