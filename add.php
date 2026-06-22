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
    header("Location:index.php");
    exit();
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
        <form method="POST">
        <input type="text" name="name" placeholder="student's name" required><br><br>
        <input type="number"name="math" placeholder="math's marks" required><br><br>
        <input type="number" name="science" placeholder="science's marks" required><br><br>
        <input type="number" name="english" placeholder="english's marks" required><br><br>
        <button type="submit" name="submit">save students</button>
</form>
</div>
    </body>
</html>