<html>



<head>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   
<?php
    include 'conn.php';
    session_start();

    ?>
    
</head>
    
    <body>

<div class="container">
 <div class="login-page">
  <div class="form">  
<form class="form" action="" method="post">
    <br>
    <input type="text" name="sname" placeholder="ناوی کڕیار">
    <button name="submitbtn" id="standard-select" >گەڕان</button>
    <button name="submitbtn2" id="standard-select" >گشتی</button>

   </form></div></div></div>
      <h1 style="text-align: center ; font-size: 175%; font-weight: bolder;">فڕۆشراوەکان</h1>
      <table>
      
     <tr>
        <th>نرخ</th>
        <th>عدد</th>
        <th>ناوی کاڵا</th>
         <th>ناوی کڕیار </th>

     </tr>   
        
    
    <?php

     if(isset($_POST['submitbtn'])){
        $sname=$_POST['sname'];

        
        //<td>' .++$count. '</td>
        $count =0;
        
        $q ="SELECT * FROM purchases_items where client_name='$sname'   ";
        //$qt ="SELECT sum(total_price) FROM purchases";



        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
        <td>' .$row[4] .'</td>
        <td>' .$row[1] .'</td>
        <td>' .$row[0] .'</td>
        <td>' .$row[3] .'</td>'.'</tr>';
        
   }}
   ?>
   <?php
   if(isset($_POST['submitbtn2'])){

        
        //<td>' .++$count. '</td>
        $count =0;
        
        $q2 ="SELECT * FROM purchases_items ";
        //$qt ="SELECT sum(total_price) FROM purchases";



        $r2 = mysqli_query($conn,$q2);
        while($row2 = mysqli_fetch_array($r2)){
        echo '
        <tr>
        <td>' .$row2[4] .'</td>
        <td>' .$row2[1] .'</td>
        <td>' .$row2[0] .'</td>
        <td>' .$row2[3] .'</td>'.'</tr>';
        
   }}
    ?>
   
    
            </table>
 <a href="adminlog.php?logout"><input type="button" value="گەڕانەوە" style=" width: 100%; color: black;margin-top: 20px; "></a> 

<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; width: 100%;margin-top: 20px;"></a> 

<style>
table{
  width:100%;
  table-layout: fixed;

}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
 
  font-family: 'Roboto', sans-serif;

  font-weight: bolder;
  font-size: 30px;
  text-align: right;
}
section{
  margin: 50px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
    text-align: right;

}

td {
  border: 5px solid #dddddd;
  padding: 8px;
  font-size: 200%;

}
th {
  border: 5px solid #dddddd;
  padding: 8px;
  font-size: 200%;
  background-color:#1abc9c;
  color: white;
  text-align: right;
}

</style>
    </body>






</html>