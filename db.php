<?php
$localhost= "localhost";
$user="root";
$password="";
$database="festival";

$conn=new mysqli($localhost,$user,$password,$database);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);

}
?>