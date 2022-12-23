<!-- Collin Hanks C00411997
     INFX 371 Project 2 -->

<?php
    $db_host = 'localhost'; 
    $db_name = 'tester';
    $db_user = 'root';
    $db_pass = '';
    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MYSQL".mysqli_connect_errno();
    }
?>