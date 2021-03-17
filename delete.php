<?php
include('config.php');

$id=$_GET['id'];
$q="DELETE FROM `users1` where id=$id";
if(mysqli_query($con,$q))
{
    header("Location:details.php");
}
else{
    echo "failed";
}
?>
