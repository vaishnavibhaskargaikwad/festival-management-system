<?php
    include "db.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$conn->real_escape_string($_POST["name"]);
        $email=$conn->real_escape_string($_POST["email"]);
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $check=$conn->query("SELECT * FROM festival WHERE email='email'");
        if($check->num_rows>0){
            echo "email already exsists";

        }else{
            $sql="INSERT INTO festival(name,email,password)VALUES('$name','$email','$password')";
            if($conn ->query($sql)){
                echo "signup successful";

            }else{
                die (" sql error:".$conn->error);
            }
        }
    }
?>

