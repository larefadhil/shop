    
    <?php
    $dbHost ="localhost";
    $dbUser ="root";
    $dbPass ="sambtsstupid";
    $dbName ="shop";
    
    $conn = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);    
    
    if(!$conn){
        echo "fail";
    }
    ?>