<html>



<head>
  
<?php
    include 'conn.php';
    session_start();

$id=$_SESSION['user'];
$tl=$_SESSION['tlesson'];
    ?>
    
</head>
    
    <body>
        <section>

      <table>
      
     <tr>
         
         <th>Rates</th>
         <th>Comments</th>
                
     </tr>   

    
    <?php
    if($_SESSION['tlesson']=="db"){
        $count =0;
        $q ="SELECT db_r,db_c FROM feedback";
        $r = mysqli_query($conn,$q);
    }
    elseif ($_SESSION['tlesson']=="oop") {
        $count =0;
        $q ="SELECT oop_r,oop_c FROM feedback";
        $r = mysqli_query($conn,$q);
    }
    elseif ($_SESSION['tlesson']=="net") {
        $count =0;
        $q ="SELECT net_r,net_c FROM feedback";
        $r = mysqli_query($conn,$q);
    }
    elseif ($_SESSION['tlesson']=="pro") {
        $count =0;
        $q ="SELECT pro_r,pro_c FROM feedback";
        $r = mysqli_query($conn,$q);
    }
        echo "Welcome : " . $_SESSION['name'] ."<hr>";
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
   
        <td>' .$row[0] .'</td>
        <td>' .$row[1] .'</td>
        '.'</tr>';
        
   }
    ?>
    
            </table>
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