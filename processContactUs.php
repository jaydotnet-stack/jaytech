<?php
    
    require_once("dbconn.php");
    extract($_POST);
    
    $name   = trim($name);
    $email = trim($email);
    $title    = trim($title);
    $message   = trim($message);
    $createdAt     = date("Y-m-d H:i:s");
    $updatedAt     = date("Y-m-d H:i:s");
    
        $sql = "INSERT INTO contacts(id,email,contact_name,title,contact_message,created_at,updated_at) VALUES(NULL,'$email','$name','$title','$contact_message','$createdAt','$updatedAt')";
        $result = mysqli_query($connection, $sql);
        if($result==true){
            echo 1;
        }else{
            echo 0;
        }
    


?>

