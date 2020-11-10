<?php 
    //DB connect
    $conn = mysqli_connect('localhost','shani','shanizee333','pizza_db');

    //check connection
    if(!$conn){
        echo 'Connection error'. mysqli_connect_error();
    }

 ?>