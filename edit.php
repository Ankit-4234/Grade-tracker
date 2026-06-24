<?php
session_start();
if (!isset($_SESSION['student_session_id'])) {
    $_SESSION['student_session_id'] = bin2hex(random_bytes(16));
}
$session_id = $_SESSION['student_session_id'];
?>
<?php
include "db.php";
 $id= $_GET['id'];
 $result= mysqli_query($conn, "SELECT * FROM students where id =$id");
 $row=mysqli_fetch_assoc($result);
 if(isset($_POST['update'])){
    $name= $_POST['name'];
    $math= $_POST['math'];
    $science= $_POST['science'];
    $english= $_POST['english'];
    $sql= "UPDATE students SET
    name='$name',
    math= '$math',
    science= '$science',
    english= '$english'
   WHERE id =$id AND session_id='$session_id'";
    $result= mysqli_query($conn, "SELECT * FROM students WHERE id =$id AND session_id='$session_id'");
    header("Location: index.php");
    exit();
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
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
           <input type="number" name="math" value="<?php echo $row['math']; ?>" required>
            <input type="number" name="science" value="<?php echo $row['science']; ?>" required>
            <input type="number" name="english" value="<?php echo $row['english']; ?>" required>
            <button type="submit" name="update"> update student </button>
</form>
</div>
 </body>
 </html>