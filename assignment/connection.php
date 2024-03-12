<?php
    $host='sql310.infinityfree.com'; //mysqlhost name
    $user='if0_35759286';  //mysqlusername   
    $pass='kicttsak999';   //mysqlpassword
    $db='if0_35759286_firstDB'; //mysqldatabase
    $conn=mysqli_connect($host,$user,$pass,$db);
    if($conn) {  
        echo "Connection successful"; 
    }
    else {  
        echo "Connection error";  
    }
?>
