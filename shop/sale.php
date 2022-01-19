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
      <h1>کڕیارێکی نوێ تۆمار بکە </h1>  
<form class="form" action="" method="post">

  <a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="text-align: center;  background-color: red; color: white ;font-size: 150%; "></a> 
   <a href="kasherlog.php?logout"><input type="button" value="گەڕانەوە"style="text-align: center; margin: 0px 380px 0px 10px;"></a> 
      <input type="date" placeholder=" date " name="date">
  <input type="text" placeholder="ناوی کڕیار" name="client_name">
        <button name="submitbtn" id="standard-select" >زیادکردنی  کڕیار</button>
    


</form>

     </div>
    </div>

     

    
    </div>  
    <?php
    
    if(isset($_POST['submitbtn'])){
        $client_name=$_POST['client_name'];
        $date=$_POST['date'];

        
        
        $query_insert="INSERT into purchases  (client_name,date,user_id,username) values ('$client_name','$date','$id','$name')";
   
    
    
   if(mysqli_query($conn,$query_insert)){
$_SESSION['p']=$_POST['client_name'];
echo $_SESSION['p'];
           header('location:item.php') ;
    }
    else{
       echo "<script>alert('fail')</script>";
    }
        
    }
        
    ?>
    
    
    
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}

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
  background: #1abc9c;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 150%;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-top: 5%;

}
.form button:hover,.form button:active,.form button:focus {
  background: #0E6050;
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