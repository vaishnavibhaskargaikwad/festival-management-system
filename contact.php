<?php
    include "db.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$conn->real_escape_string($_POST["name"]);
        $email=$conn->real_escape_string($_POST["email"]);
        $message=$conn->real_escape_string($_POST["message"]);
        $check=$conn->query("SELECT * FROM message WHERE email='email'");
        if($check->num_rows>0){
            echo "email already exsists";

        }else{
            $sql="INSERT INTO message (name,email,message)VALUES('$name','$email','$message')";
            if($conn ->query($sql)){
                echo "successful";

            }else{
                echo "error:".$conn->error;
            }
        }
    }
?>

