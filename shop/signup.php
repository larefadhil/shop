<html>
    
    
<head>
<link rel="stylesheet" href="login.css">
<?php
    include 'conn.php';
    ?>
    
</head>
    
    
<body>
 <div class="login-page">
  <div class="form">  
      <h1>کەسێکی تازە تۆمار بکە</h1>  
<form class="login" action="" method="post">
  <input type="text" placeholder="وشەی بەکارهێنەر" name="Username">
    <br>
  <input type="text" placeholder="وشەی نهێنی" name="Password">
    <br>
  <input type="text" placeholder="ناوی سیانی" name="fname">
   <br>
    <select name="type">
    <option>Student</option>
    <option>Teacher</option>
    <option>Admin</option>
    </select>
<br>  
  <button name="submitbtn">زیادکردنی بەکارهێنەر</button>
    <hr>
   <a href="login.php?logout"><input type="button" value="چونەدەرەوە"></a> 
   <a href="users.php?logout"><input type="button" value="بینینەوەی بەکارهێنەرەکان"></a> 
    <p>
</p>
</form>
     </div>
    </div>
    
    
    <?php
    
    if(isset($_POST['submitbtn'])){
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
        $fname=$_POST['fname'];
        $UserType=$_POST['type'];
        
        
        $query_insert="INSERT into user (username,password,fullname,usertype) values ('$Username','$Password','$fname','$UserType')";
   
    
    
   if(mysqli_query($conn,$query_insert)){
       echo "<script>alert('you entered a new user')</script>";
    }
    else{
       echo "<script>alert('fail')</script>";
    }
        
    }
        
    ?>
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    </body>



</html>