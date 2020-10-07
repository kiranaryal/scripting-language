


<table >
<caption><?php echo $usertype."s"; ?></caption>
<tr>
<th>user</th>
<th>name</th>
<th>phone</th>
<th>address</th>
<th>email</th>
<th>qualification</th>
<th>experience</th>
<th>about</th>
<th>delete</th>
<th>edit</th>
</tr>


<?php

$result = mysqli_query($conn,"SELECT * FROM $usertype  ");
while ($row= mysqli_fetch_array($result)){
  ?>
<tr>

<td><?php echo $row['user']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['qualification']; ?></td>
<td><?php echo $row['experience']; ?></td>
<td><?php echo $row['about']; ?></td>


<td><a href="delete.php?usertype=<?php echo $usertype; ?>&id=<?php echo $row['id']; ?>">delete</a></td>
<td><a href="edit.php?usertype=<?php echo $usertype; ?>&id=<?php echo $row['id']; ?>">edit</a></td>

</tr>
<?php




}


?>


</table>