<html>



<head>
    
<?php
    include 'conn.php';
    session_start();

    ?>
    
</head>
    
    <body>
      <h1 style="text-align: center;">بەکارهێنەرەکان</h1>
      <table>
      
     <tr>
        <th>ژمارەی مۆبایل</th>
        <th>جۆری بەکارهێنەر</th>        
        <th>ناوی سیانی</th>
        <th>وشەی نهێنی</th>

         <th>وشەی بەکارهێنەر</th>

     </tr>   
        
    
    <?php
        //<td>' .++$count. '</td>
        $count =0;
        $q ="SELECT * FROM user";
        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
        <td>' .$row[5] .'</td>
        <td>' .$row[4] .'</td>
        <td>' .$row[3] .'</td>
        <td>' .$row[2] .'</td>
        <td>' .$row[1] .'</td>'.'</tr>';
        
   }
    ?>
    
            </table>
            <a href="adminlog.php?logout"><input type="button" value="گەڕانەوە" ></a> 

<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; "></a> 

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
  color: #0E6050;
}
section{
  margin: 50px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
    text-align: right;
color: #0E6050;
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
  background-color: #1abc9c;
color: white;
}
input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  width: 100%;
  border: 0;
  margin:10 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 20px;
}
</style>
    </body>






</html>