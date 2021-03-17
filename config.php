
<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="web";
$con=mysqli_connect($hostname,$username,$password,$databasename);
if(!$con)
echo "connection failed" + mysqli_connect_error();
else
echo "connnection passsed";
?>
