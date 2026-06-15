<?php
$host='localhost';
$name='root';
$password='';
$database='studentdb';
$conn=new mysqli($host,$name,$password,$dbname);
if(!$conn){
    die("Connection failed");
}
?>
