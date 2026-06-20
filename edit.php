<?php
include "db.php";
 $id= $_GET['id'];
 $result= mysqli_query($conn, "SELECT * FROM students where id =$id");
 $row=my_sqli_fetch_assoc($result);
 if(isset($_POST['update'])){
    name= $_POST['name'];
    math= $_POST['math'];
    science= $_POST['science'];
    english= $_POST['english'];
    $sql= "UPDATE student SET
    name='$name',
    math= '$math',
    science= '$science'
    english= '$english'
    WHERE id =$id";
    mqsql_query($conn,$sql);
    header("location:index.php");
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <div class="container">
        <h1> Edit students </h1>
        <form method="POST">
            <input type="text" name="name" value="<php echo $row['name']; ?>" required>
            <input type="math" name="math" value="<php echo $row['math']; ?>" required>
            <input type="science" name="science" value="<php echo $row['science']; ?>" required>
            <input type="english" name="english" value="<php echo $row['english']; ?>" required>
            <button type="submit" name="update"> update student </button>
</form>
</div>
 </body>
 </html>