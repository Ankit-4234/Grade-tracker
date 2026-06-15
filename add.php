<?php
include "db.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $math=$_POST['math'];
    $science=$_POST['science'];
    $english=$_POST['english'];
    $sql="INSERT INTO students(name,math,science,english)
    values('$name','$math','$science','$english')";
    mysqli_query($conn,$sql);
    header("location :index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add students</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <div class="container">
        <form method="POST>
        <input type="text" name="name" placeholder="etner name of student" required><br><br>
        <input type="number"name="math" placeholder="enter marks obtained in maths" required><br><br>
        <input type="number" name="science" placeholder="enter marks obtained in science" required><br><br>
        <input type="number" name="english" placegolder="enter marks obtained in english" required><br><br>
</form>
</div>
    </body>
</html>