<?php 
include('config.php');
mysqli_select_db($con,'web');
?>


<?php
mysqli_select_db($con,'web');
$id=$_GET['id'];
$q="SELECT * FROM `users1` WHERE `id`=$id";
$result=mysqli_query($con,$q);
$row=$result->fetch_assoc();
$username=$row['username'];
$email=$row['email'];
$gender=$row['gender'];
$city=$row['city'];
?>


<?php
mysqli_select_db($con,'web');
if(isset($_POST['edit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$city=$_POST['city'];

$q="UPDATE `users1` SET username='$username' ,email='$email',gender='$gender',city='$city' WHERE id='$id'";
if(mysqli_query($con,$q))
{
    echo "updated";
    header("Location:details.php");
}
else{
    echo "failed";
}


}
else{
echo"please click submit button to submit the data";
}
?>




<html>
<head>
</head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"  ?>">
USERNAME<input type="text" name="username" value=<?php echo "$username "?> placeholder="type your name" required/><br>
EMAIL<input type="email" name="email" value=<?php echo "$email"?> placeholder="enter email" required /><br>
Gender Male<input type="radio" name="gender" value="male"<?php if($gender=="male"){echo "checked";}?>>
FEMale<input type="radio" name="gender" value="female"<?php if($gender=="female"){echo "checked";}?>>
SELECT CITY<select name="city"  required>
    <option value="Dehradun" <?php if($city=="Dehradun") {echo "selected";}?>>Dehradun</option>
    <option value="Haridwar" <?php if($city=="Haridwar") {echo "selected";}?>>Haridwar</option>
    <option value="Nainital" <?php if($city=="Nainital"){echo "selected";}?>>Nainital</option>
    <option value="Pauri" <?php if($city=="Pauri"){echo "selected";}?>>Pauri</option>
    <option value="Haldwani" <?php if($city=="Haldwani"){echo "selected";}?>>Haldwani</option>
    <option value="Lucknow" <?php if($city=="Lucknow"){echo "selected";}?>>Lucknow</option>
    <option value="Chandigarh" <?php if($city=="Chandigarh"){echo "selected";}?>>Chandigarh</option>
    <option value="Nepal" <?php if($city=="Nepal"){echo "selected";}?>>Nepal</option>
    <option value="Meerut" <?php if($city=="Meerut"){echo "selected";}?>>Meerut</option>
</select><br>
<input type="submit" name="edit" value="update"/>
</form>
</body>
</html>
