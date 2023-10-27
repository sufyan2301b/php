<?php
$con = mysqli_connect('localhost','root','','dpconection');
if($con)
{
    echo 'Connected';
}
else
{
    echo 'Not Connected';
}
?>