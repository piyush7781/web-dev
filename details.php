<?php
include('config.php');
?><?php
mysqli_select_db($con,'web');?>
<?php
$q="SELECT * from `users1` ";
$result=mysqli_query($con,$q);
if($result)
{
 ?>
 <table border="1px">
     <tr>
     <th>username</th>
     <th>email</th>
     <th>gender</th>
     <th>city</th>
     <th>update</th>
     <th>delete</th>
</tr>
<?php
while($row=$result->fetch_assoc()){?>
<tr>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['gender']?></td>
    <td><?php echo $row['city']?></td>
    <td><a href="edit.php?id=<?php echo $row['id']?>"><input type="button" value="edit"/></a></td>
    <td><a href="delete.php?id=<?php echo $row['id']?>">
    <input type="button" value="delete"></a></td>
</tr><?php
}
?>
</table>
<?php  
}
?>
