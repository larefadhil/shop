<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

include 'conn.php';

session_start();
$id=$_SESSION['user'];
$name=$_SESSION['name'];

?>

	<div class="container">

<form>






<a href="kasherlogin.php?logout" class="btn btn-info" style="font-size: 50px; margin: 25px; width: 750px;">زیادکردنی کاڵا</a> 
<br>
   <a href="sale.php?logout" class="btn btn-warning" style="font-size: 50px; margin: 25px; width: 750px;"> بەشی فڕۆشتن</a> 
   <br>
   
   <a href="login.php?logout" class="btn btn-danger" style="font-size: 50px; margin: 25px; width: 750px;">چونەدەرەوە</a> 

</form>

    </div>

<style>
.container{
	text-align: center;
	justify-content: center;
	padding: 50px ;
}	
</style>
</body>
</html>