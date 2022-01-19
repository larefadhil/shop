<html>

    <head>
    
    
<?php
include 'login.php';
include 'conn.php';
$idU =$_SESSION['user'];
$query_get_data="SELECT Username,Password from user where User_Id='$idU ' ";
$exe=mysqli_query($conn,$query_get_data);
$result=mysqli_fetch_array($exe);


    echo "user name is : " . $result['Username'];
    echo"<br>";
    echo "the password is : " . $result['Password'];
    echo"<br>";

?>
        </head>

    
    <body>
    
    <h1>iweugfwioeugfwiug</h1>
    
    </body>



</html>