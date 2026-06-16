<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student grade tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Student Grade Tracker</h1>
    <a href="add.php">
        <button class="btn add"> Add students </button>
</a>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>math></th>
        <th>science</th>
        <th>english</th>
        <th>average</th>
        <th>actions</th>

</tr>
<?php
$result= mysqli_query($conn,"SELECT * FROM students");
while($row=mysqli_fetch_assoc($result)){
    $avg=($row['math']+$row['science']+$row['english']) /3;

?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['math']; ?></td>
    <td><?php echo $row['science']; ?></td>
    <td><?php echo $row['english']; ?></td>
    <td><?php echo number_format($avg,2); ?> </td>
    <td>
        <a href="edit.php?id=<?php echo $row=['id']; ?>">
            <button class="btn edit">Edit</button>
</a>
        <a href="delete.php?id=<?php echo $row=['id']; ?>">
            <button class="btn delete">Delete</button>
</a>
</td>
</tr>
<?php } ?>
</table>
</div> 

</body>
</html>