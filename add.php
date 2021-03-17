<?php 

include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];
mysqli_select_db($con,'web');
$q="INSERT INTO `users1`(`username`,`email`,`gender`,`city`) values ('$username','$email','$gender','$city')";//inserrting data from fomr to tsable
mysqli_query($con,$q);
mysqli_close($con);

}
else{
echo"please click submit button to submit the data";
}
?>
<html>
<head>
</head>
<body>
<form method="POST" action="add.php">
USERNAME<input type="text" name="username" placeholder="type your name"/><br>
EMAIL<input type="email" name="email" placeholder="enter email" /><br>
MALE<input type="radio" name="gender" value="male" checked/><br>
FEMALE<input type="radio" name="gender"  value="female" /><br>
SELECT CITY<select name="city">
    <option value="Dehradun">Dehradun</option>
    <option value="Haridwar">Haridwar</option>
    <option value="Nainital">Nainital</option>
    <option value="Pauri">Pauri</option>
    <option value="Haldwani">Haldwani</option>
    <option value="Lucknow">Lucknow</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Nepal">Nepal</option>
    <option value="Meerut">Meerut</option>
</select><br>
<input type="submit" name="submit" value="click here to submit your data"/>
</form>
</body>
</html>
