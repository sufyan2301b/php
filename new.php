<?php
include('connection.php');
if(isset($_POST['btn']))
{
$email= $_POST['email'];
$password= $_POST['password'];
$insertquery = mysqli_query($con,"INSERT INTO `root`(`email`, `password`) VALUES ('$email','$password')");
if($insertquery)
{
    echo 'Record Inserted';
}
else{
    echo 'Error in insertion';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit" name="btn">submit</button>
    </form>
</body>
</html>