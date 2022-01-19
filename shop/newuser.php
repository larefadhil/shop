<html>
    
    
<head>

<?php
    include 'conn.php';
    ?>
    
</head>
    
    
<body>
 <div class="login-page">
  <div class="form">  
      <h1>بەکارهێنەرێکی نوێ تۆمار بکە </h1>  
<form class="login" action="" method="post">
  <input type="text" placeholder="وشەی بەکارهێنەر" name="Username">
    <br>

  <input type="Password" placeholder="وشەی نهێنی" name="Password">
    <br>
    <input type="text" placeholder="ناوی سیانی" name="fname">
   <br>
   
     <input type="text" placeholder="ژمارەی مۆبایل" name="phone">
    <br>
  
   <label>جۆری بەکارهێنەر </label>
    <select name="type">
    <option>ئادمین</option>
    <option>کاشێر</option>
    </select>
<br>
  <button name="submitbtn" id="standard-select" >زیادکردنی بەکارهێنەر</button>
    <hr>
       <a href="adminlog.php?logout"><input type="button" value="گەڕانەوە" style="text-align: center;"></a> 

   <a href="login.php?logout"><input type="button"  value="چونەدەرەوە" style="text-align: center;  background-color: red; color: white ;font-size: 150%; mouse"></a> 
   
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
        $Phone=$_POST['phone'];
        
        
        $query_insert="INSERT into user (username,password,fullname,usertype,phone) values ('$Username','$Password','$fname','$UserType','$Phone')";
   
    
    
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

.login-page {
  width: 70%;
  padding: 5% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background:  #1abc9c;
  max-width: 360px;
  margin: 0 auto 0px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 150%;
  text-align:right;

}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #0E6050;
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
  background: #062821;
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
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body{
  
  font-family: 'Roboto', sans-serif;
color: white;
}
select {
  // A reset of styles, including removing the default dropdown arrow
  appearance: none;
  // Additional resets for further consistency
  background-color: transparent;
  border: none;
  padding: 0 1em 0 0;
  margin-top: 10px;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  font-size: 150%;
}
label{
  font-size: 150%;
}
</style>
    
    
   
    
    

    
    </body>



</html>