
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
        table,th,td{
border:1px solid black;
border-spacing: 0px;

 }
 table{
   width:60%;
   margin-left:10%;
   margin-right:10%;
 }
 th{
   font:bold;
 }
 
 form{
  margin-left:10%;
 }
 input{
  
  align:left;
 }
 
        
        
        </style>
    </head>
    <body>
     
        
        
  
<form action="" method="POST">
<table  style="width:20%;margin-left:0%;border:white;">
<tr>

<input type="radio" name="usertype" value="student">student</button>
<input type="radio" name="usertype" value="teacher">teacher</button>
</tr>
<tr></tr>
  <td>
    <label for="user">user</label>
  </td>
  <td>
    <input type="text" class="form-control" name="user" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="name">name</label>
  </td>
  <td>
    <input type="text" class="form-control" name="name" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="phone">phone</label>
  </td>
  <td>
    <input type="number" class="form-control" name="phone" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="address">address</label>
  </td>
  <td>
    <input type="text" class="form-control" name="address" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="email">email</label>
  </td>
  <td>
    <input type="email" class="form-control" name="email" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="qualification">qualification</label>
  </td>
  <td>
    <input type="text" class="form-control" name="qualification" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="experience">experience</label>
  </td>
  <td>
    <input type="text" class="form-control" name="experience" required></div>
  </td>
</tr>
<tr>

<td>
  <label for="about">about</label>
</td>
<td>
<input type="text" class="form-control" name="about" required>
</td>
</tr>
</table>

<button type="submit">submit</button>

</form>




<?php 

$conn = new mysqli('localhost','root','','blog')
or die("cannot connect");
if(isset($_POST['user'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['email'])&&isset($_POST['qualification'])&&isset($_POST['experience'])&&isset($_POST['about'])&&isset($_POST['usertype']))
{
  $usertype=$_POST['usertype'];
  $user =$_POST['user'];
  $name =$_POST['name'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
  $email =$_POST['email'];
  $qualification =$_POST['qualification'];
  $experience =$_POST['experience'];
  $about =$_POST['about'];
  if($usertype== "student"){
  $sql = "INSERT INTO `student` (`user`,`name`,`phone`,`address`,`email`,`qualification`,`experience`,`about`) VALUES ('$user','$name','$phone','$address','$email','$qualification','$experience','$about') " ;
  }
  if($usertype== "teacher"){
  $sql = "INSERT INTO `teacher` (`user`,`name`,`phone`,`address`,`email`,`qualification`,`experience`,`about`) VALUES ('$user','$name','$phone','$address','$email','$qualification','$experience','$about') " ;
}
  
  
  if(mysqli_query($conn,$sql)){
    
  }
  else{
    echo "error";
    
  }
}


?>
<?php
$conn = new mysqli('localhost','root','','blog')
or die("cannot connect");
$result = mysqli_query($conn,"SELECT * FROM student  ");
?>

<div>


<table >
<caption>students</caption>
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
<td><a href="delete.php?id=<?php echo $row['id'] ?>">delete</a></td>
<td><a href="edit.php?id=<?php echo $row['id'] ?>">edit</a></td>
</tr>

<?php




}
?>
</table>












</div>


</br>
<br>
<br>
<br>

<div>
<table >
<caption>teachers</caption>
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
$result = mysqli_query($conn,"SELECT * FROM teacher  ");
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
<td><a href="delete2.php?id=<?php echo $row['id'] ?>">delete</a></td>
<td><a href="edit2.php?id=<?php echo $row['id'] ?>">edit</a></td>

</tr>
<?php




}


?>


</table>





</div>





</body>
</html>