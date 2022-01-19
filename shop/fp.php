<html>



<head>
    
<?php
    include 'conn.php';
    session_start();
$id=$_SESSION['user'];
    ?>
    
</head>
    
    <body>
        <section>
      <table>
      
     <tr>
         
         <th>oop rate</th>
         <th>oop comment</th>
         <th>net rate</th>
         <th>net comment</th>
         <th>database rate</th>
         <th>database comment</th>
         <th>programming rate</th>
         <th>programming comment</th>         
     </tr>   
        
    
    <?php
        //<td>' .++$count. '</td>
        $count =0;
        $q ="SELECT * FROM feedback where User_Id =$id";
        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
          echo "Welcome : " . $_SESSION['fname']."<hr>";
        echo '
        <tr>
        <td>' .$row[1] .'</td>
        <td>' .$row[2] .'</td>
        <td>' .$row[3] .'</td>
        <td>' .$row[4] .'</td>  
        <td>' .$row[5] .'</td>
        <td>' .$row[6] .'</td>
        <td>' .$row[7] .'</td>
        <td>' .$row[8] .'</td>'.'</tr>';
        
   }
    ?>
    
            </table>
               <section>
      <table>
      
     <tr>
         
         <th>oop rate</th>
         <th>oop comment</th>
         <th>net rate</th>
         <th>net comment</th>
         <th>database rate</th>
         <th>database comment</th>
         <th>programming rate</th>
         <th>programming comment</th>         
     </tr>   
        
    
    <?php
        //<td>' .++$count. '</td>
        $count =0;
        $q ="SELECT * FROM feedback where User_Id =$id";
        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
          echo "Welcome : " . $_SESSION['fname']."<hr>";
        echo '
        <tr>
        <td>' .$row[1] .'</td>
        <td>' .$row[2] .'</td>
        <td>' .$row[3] .'</td>
        <td>' .$row[4] .'</td>  
        <td>' .$row[5] .'</td>
        <td>' .$row[6] .'</td>
        <td>' .$row[7] .'</td>
        <td>' .$row[8] .'</td>'.'</tr>';
        
   }
    ?>
    
            </table>
<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; "></a> 

</section>
<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; "></a> 

</section>
<style>
table{
  width:100%;
  table-layout: fixed;
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
  color: white;
  font-weight: bolder;
  font-size: 30px;
}
section{
  margin: 50px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-size: 20px;
}
th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-size: 20px;
  background-color: #51A09A;
  color: white;
}
input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  width: 100%;
  border: 0;
  margin: 50 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 20px;
}

</style>
    </body>






</html>