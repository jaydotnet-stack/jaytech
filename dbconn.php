<?php

    //Database Connection Variables
    $servername = "localhost";
    $username   = "root";
    $dbpassword = "";
    $database   = "jay_portfolio";  

    //Database connection handle
    $connection = mysqli_connect($servername,$username,$dbpassword,$database) or die(mysql_error());

?>