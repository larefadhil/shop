<html>
<head>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<?php
include 'conn.php';

session_start();
$id=$_SESSION['user'];
$p=$_SESSION['p'];
$price=$_SESSION['price'];
$total=$_SESSION['total'];
?>
    
</head>
    
    
<body>
<?php
    
    if(isset($_POST['submitbtn'])){
        $count=$_POST['count'];
        $item_name=$_POST['item_name'];

        
        
        $query_insert="INSERT into purchases_items  (item_name,sold_count,total_item,client_name) values ('$item_name','$count','0','$p')";
    $q_price="UPDATE purchases_items
        INNER JOIN items  
             ON purchases_items.item_name=items.item_name
SET purchases_items.sell_price=items.sell_price
WHERE purchases_items.item_name=items.item_name ";

// $q_pricet="UPDATE purchases_items
//         SET total_item
//              purchases_items.total_item=purchases_items.sell_price+purchases_items.count";
    
// $sqll = "SELECT (items.sell_price*purchases_items.sold_count) as totalitem FROM items join purchases_items where  items.item_name=purchases_items.item_name";
// $tl = mysqli_query($conn,$sqll);
// $result = mysqli_fetch_array($tl);
 

$q_pricee="UPDATE purchases_items
        INNER JOIN items  
             ON purchases_items.item_name=items.item_name
SET purchases_items.total_item=(items.sell_price*purchases_items.sold_count)
WHERE purchases_items.item_name=items.item_name ";




   if(mysqli_query($conn,$query_insert)){
   if(mysqli_query($conn,$q_price)){
   // if(mysqli_query($conn,$q_pricet)){}
         if(mysqli_query($conn,$q_pricee)){}

   $sql = "SELECT SUM(total_item) as total FROM purchases_items WHERE '$p'= client_name ";
$t = mysqli_query($conn,$sql);
$rowt = mysqli_fetch_array($t);
$sum = $rowt['total'];
    $_SESSION['total']=$sum;

// if ($result) {
//          $totalitem=$result['totalitem'];
// }

 

// $queryttl="UPDATE items join purchases_items set total_item = '$totalitem' WHERE items.item_name=purchases_items.item_name";
//    if(mysqli_query($conn,$queryttl)){}


$querytt="UPDATE purchases set total_price = '$sum' WHERE client_name='$p'";
   if(mysqli_query($conn,$querytt)){}






}

     }
    else{
       echo "<script>alert('fail')</script>";
    }
        
    }
        
    ?>
    
<?php

// mysql select query
$query = "SELECT * FROM `items`";



// for method 2

$result2 = mysqli_query($conn, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]  </option>";
$_SESSION['price']=$row2[2];
}

?>
<div class="container" >
 <div class="login-page">
  <div class="form">  
<form class="form" action="" method="post">

  <a href="login.php?logout"><input type="button" value="چونەدەرەوە" style="text-align: center;  background-color: red; color: white ;font-size: 150%; "></a> 
   <a href="sale.php?logout"><input type="button" value="گەڕانەوە"style="text-align: center; margin: 0px 380px 0px 10px;"></a> 
   <button name="submitbtn" id="standard-select" style="margin-right: 100px;" >زیادکردنی کاڵا</button>
  <input type="text" name="count" placeholder=" عدد" style="width: 100px;" >
  <select name="item_name" >
            <?php echo $options;?>
        </select>
 
 
   
    


</form>

     </div>
    </div>
<div class="print-container"></div>
<div class="container" >

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td class="text-center"><strong>item name</strong></td>
                      <td class="text-center"><strong>sold count</strong></td>
                      <td class="text-center"><strong>base price</strong></td>
                      <td class="text-center"><strong>Total</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                     
    <?php

     
        // $count =0;
        $q ="SELECT * FROM purchases_items where  '$p'= client_name ";
        // $q1 ="SELECT sell_price FROM items where  item_name='$item_name'  ";
        
        $r = mysqli_query($conn,$q);
        // $r1 = mysqli_query($conn,$q1);
        while($row = mysqli_fetch_array($r)){ 
        // while($row3 = mysqli_fetch_array($r1))
// $c=$row[1]*$row3[0];
          echo '
        <tr>
        <td class=" text-center">' .$row[2] .'</td>
        <td class=" text-center">' .$row[1] .'</td>
        <td class=" text-center">' .$row[4] .'</td>
        <td class=" text-right">' .$row[0] .'</td>
'.'</tr>';
}
 
  

    ?>
  </tr>
                
                  <tr>
    
   <?php echo'
    <td class="no-line text-center">' .$_SESSION['total']  .'</td>';
    ?>
    <td class="no-line text-center"><strong>Total</strong></td>
    <td class="no-line"></td>
    <td class="no-line"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    
 

    
    </div>  
    
    
    </div>
<style type="text/css">
@media print {
  .body {
    visibility: hidden;
  }
  .form{
    visibility: hidden ;
  }
  .print-container, .print-contaner * {
    visibility: visible;
        position: absolute;
    top: 0;
    left: 0;
  }

}
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.invoice-title h2, .invoice-title h3 {
    display: inline-block
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
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 150%;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
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
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
  font-size: 170%;
 text-align-last:right;
  
    direction: rtl;}
label{
  font-size: 150%;
}

</style>
    
    
   
    
    

    
    </body>



</html>