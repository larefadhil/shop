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
    <input type="date" placeholder=" datestart " name="datestart">
    <input type="date" placeholder=" dateend " name="dateend">
    <button name="submitbtn" id="standard-select" >گەڕان</button>

   </form></div></div></div>
      <h1 style="text-align: center ; font-size: 175%; font-weight: bolder;">فڕۆشراوەکان</h1>
      <table>
      
     <tr>
        <th>نرخ</th>
        <th>بەروار</th>
        <th>ناوی کڕیار</th>
         <th>ناوی کاشێر</th>

     </tr>   
        
    
    <?php

    if(isset($_POST['submitbtn'])){
        $datestart=$_POST['datestart'];
        $dateend=$_POST['dateend'];

        
        //<td>' .++$count. '</td>
        $count =0;
        $q ="SELECT * FROM purchases where date between '$datestart' and '$dateend' ";
        //$qt ="SELECT sum(total_price) FROM purchases";


$t = "SELECT SUM(total_price) as total FROM purchases where date between '$datestart' and '$dateend' ";
$tt = mysqli_query($conn,$t);
$row2 = mysqli_fetch_array($tt);
$sumq = $row2['total'];
    $_SESSION['totalq']=$sumq;




        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
        <td>' .$row[3] .'</td>
        <td>' .$row[1] .'</td>
        <td>' .$row[0] .'</td>
        <td>' .$row[4] .'</td>'.'</tr>';
        
   }}
    ?>
    <tr>

                    <?php echo'
                    <td class="no-line text-center">' .$_SESSION['totalq']  .'</td>';
                    ?>
                                      <td class="no-line text-center">کۆی فڕۆشراو</td>

                  </tr>
    
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