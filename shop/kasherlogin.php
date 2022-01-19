<html>
<head>

</head>
 

<body>
<?php

include 'conn.php';

session_start();
$id=$_SESSION['user'];
$name=$_SESSION['name'];

?>
    <br>
    <br>
    
  <div class="login-page">
  <div class="form">  
    
      <h1 style="text-align: center;">زیادکردنی کاڵا  </h1>  
      <?php
      if(isset($_SESSION['user']))
    {
 echo "کاشێر : " . $_SESSION['fname'] . "<br>";
  
    }
?>

      
<form class="feedback" action="" method="post">
  <br>
  
  <input type="text" placeholder="ناوی کاڵا "name="item_name" > 
    <br>
  <input type="text" placeholder="نرخی بنەڕەت" name="base_price">
    <br>
  <input type="text" placeholder="نرخی فڕۆشتن" name="sell_price" >
   <br>   
  <br>
  <button name="submitbtnf">زیادکردن </button>
   
   <a href="itemview.php?logout"><input type="button" value="بینینەوە" style="  font-size: 130%; text-align: center; margin-top: 20px;"></a>
    <a href="kasherlog.php?logout"><input type="button" value="گەڕانەوە" style="  font-size: 130%; text-align: center; margin-top: 10px; background-color: #08a66f; color: white;"></a> 
   <a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="background-color: red; color: white; text-align: center;   font-size: 130%;
" ></a> 
     </form>
      </div>
    </div>
    
    
    <?php
    
    if(isset($_POST['submitbtnf'])){

        $item_name=$_POST['item_name'];
        $base_price=$_POST['base_price'];
        $sell_price=$_POST['sell_price'];

    
        
        $query_insertitem="INSERT INTO items (item_name,base_price,sell_price,user_id,username)
VALUES ('$item_name','$base_price','$sell_price','$id','$name')";
   
  
       
        
    
    
   if(mysqli_query($conn,$query_insertitem)){
    
    
   $_SESSION['item_name']=$item_item;
   $_SESSION['base_price']=$base_price;
   $_SESSION['sell_price']=$sell_price;
       
   }
    else{
       echo "<script>alert('سەرکەوتوو نەبوو')</script>";
    }
        
    } 
    
    
    ?>
        
        
    


<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 70%;
  padding: 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #1abc9c;
  max-width: 500px;
  margin: auto;
  padding: 15px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    text-align: right;
    color: white;

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
  font-size: 130%;
    text-align: right;

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
  font-size: 130%;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
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
    font-size: 130%;

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
  font-weight: bolder;
  font-size: 20px;
  text-align: center;

}
/*body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}*/
</style>
    
   </body> 
    

</html>