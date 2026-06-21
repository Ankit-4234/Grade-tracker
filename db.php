<?php
$host='localhost';
$name='root';
$password='';
$database='studentdb';
$conn=new mysqli($host,$name,$password,$database);
if($conn->connect_error){
    die("Connection failed". $conn->connect_error);
}
?>
