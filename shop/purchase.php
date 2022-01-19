<html>
<head>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<?php
include 'conn.php';

session_start();
$id=$_SESSION['user'];
$name=$_SESSION['name'];

?>
    
</head>
    
    
<body>
<div class="container">
 <div class="login-page">
  <div class="form">  
      <h1>بەکارهێنەرێکی نوێ تۆمار بکە </h1>  
<form class="login" action="" method="post">
  <input type="text" placeholder=" user " name="Username">

  <input type="text" placeholder="pass" name="Password">
    <input type="date" placeholder=" date " name="fname">
   
     <input type="text" placeholder=" phoe" name="phone">
    <br>
  
   <label>جۆری بەکارهێنەر </label>
    <select name="type">
    <option>ئادمین</option>
    <option>کاشێر</option>
    </select>
<br>
  <button name="submitbtn" id="standard-select" >زیادکردنی بەکارهێنەر</button>
    <hr>
   <a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="text-align: center;  background-color: red; color: white ;font-size: 150%;"></a> 
   <a href="allfv.php?logout"><input type="button" value="بینینەوەی فڕۆشراو"style="text-align: center;"></a> 
    <p>
</p>


</form>

     </div>
    </div>
       <section>
      <table class="table">
      
     <tr>
         
         <th>client name</th>
         <th>date</th>
         <th>user id</th>
                  
     </tr>   
        
    
    <?php
        //<td>' .++$count. '</td>
        $count =0;
        $q ="SELECT * FROM purchases";
        $r = mysqli_query($conn,$q);
        while($row = mysqli_fetch_array($r)){
        echo '
        <tr>
        <td>' .$row[1] .'</td>
        <td>' .$row[2] .'</td>
        <td>' .$row[3] .'</td>
'.'</tr>';
        
   }
    ?>
    
            </table>
<a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; "></a> 

</section>
    
    </div>
    <?php
    
    if(isset($_POST['submitbtn'])){
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
        $fname=$_POST['fname'];
        $UserType=$_POST['type'];
        $Phone=$_POST['phone'];
        
        
        $query_insert="INSERT into purchases (purchase_id,client_name,date,user_id,username) values ('$Username','$Password','$fname','$id','$name')";
   
    
    
   if(mysqli_query($conn,$query_insert)){
       echo "<script>alert('you entered a new user')</script>";
    }
    else{
       echo "<script>alert('fail')</script>";
    }
        
    }
        
    ?>
    
    
    
    
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);



.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  font-size: 150%;
  text-align:right;

}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #b56300;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 150%;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-top: 10%;

}
.form button:hover,.form button:active,.form button:focus {
  background: #33260c;
}

.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

body{
  font-family: 'Roboto', sans-serif;
  text-align: right;
}
select {
  // A reset of styles, including removing the default dropdown arrow
  appearance: none;
  // Additional resets for further consistency
  background-color: lightgray;
  border: none;
  padding: 0 1em 0 0;
  margin-top: 10px;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  font-size: 150%;
  text-align: right;
}
label{
  font-size: 150%;
}

</style>
    
    
   
    
    

    
    </body>



</html>