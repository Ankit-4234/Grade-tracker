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
mysqli_query($conn,"DELETE FROM students WHERE id=$id AND session_id='$session_id'");

header("location:index.php");
?>