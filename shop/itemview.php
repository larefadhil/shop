<html>



<head>
 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   
<?php
    include 'conn.php';
    session_start();

    ?>
    
</head>
    
    <body>
<form>
<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="text-align: center;  background-color: red; color: white ;font-size: 100%; "></a> 
   <a href="kasherlogin.php?logout"><input type="button" value="گەڕانەوە"style="text-align: center; margin: 0px 1250px 0px 10px; font-size: 100% ; "></a>
     </form>
      <h1 style="text-align: center ; font-size: 175%; font-weight: bolder;">کاڵاکان</h1>
      <table style="width: 70%; justify-content: center; margin: auto;">
      
     <tr>
        <th>نرخ</th>
        <th>ناوی کاڵا</th>
        <th>ناوی کڕیار</th>

     </tr>   
        
    
    <?php

        
        $q ="SELECT * FROM items ";


        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
        <td>' .$row[1] .'</td>
        <td>' .$row[0] .'</td>
        <td>' .$row[4] .'</td>'.'</tr>';
        }
       ?>
    
    
            </table>

<style>
table{
  width:100%;
  table-layout: fixed;

}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
 
  font-family: 'Roboto', sans-serif;

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