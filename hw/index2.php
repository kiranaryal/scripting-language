
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     
        
        
  
<form action="" method="POST">
<input type="radio" name="usertype" value="student">student</button>
<input type="radio" name="usertype" value="teacher">teacher</button>
<div class="Form-group">
<label for="user">user</label>
<input type="text" class="form-control" name="user" required></div>

<div class="Form-group">
<label for="name">name</label>
<input type="text" class="form-control" name="name" required></div>


<div class="Form-group">
<label for="phone">phone</label>
<input type="number" class="form-control" name="phone" required></div>

<div class="Form-group">
<label for="address">address</label>
<input type="text" class="form-control" name="address" required></div>

<div class="Form-group">
<label for="email">email</label>
<input type="email" class="form-control" name="email" required></div>

<div class="Form-group">
<label for="qualification">qualification</label>
<input type="text" class="form-control" name="qualification" required></div>

<div class="Form-group">
<label for="experience">experience</label>
<input type="text" class="form-control" name="experience" required></div>


<div class="Form-group">
<label for="about">about</label>
<input type="text" class="form-control" name="about" required></div>

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
    echo "inserted";
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

while ($row= mysqli_fetch_array($result)){
    ?>

<div>
<?php

echo $row['user'];
echo $row['name'];
echo $row['phone'];
echo $row['address'];
echo $row['email'];
echo $row['qualification'];
echo $row['experience'];
echo $row['about'];

?>
<a href="delete.php?id=<?php echo $row['id'] ?>">delete</a>
<a href="edit.php?id=<?php echo $row['id'] ?>">edit</a>



</div>

<?php




}
?>
</br>
<br>
<br>
<br>
<?php
$result = mysqli_query($conn,"SELECT * FROM teacher  ");
while ($row= mysqli_fetch_array($result)){
  ?>

<div>
<?php

echo $row['user'];
echo $row['name'];
echo $row['phone'];
echo $row['address'];
echo $row['email'];
echo $row['qualification'];
echo $row['experience'];
echo $row['about'];

?>
<a href="delete2.php?id=<?php echo $row['id'] ?>">delete</a>
<a href="edit2.php?id=<?php echo $row['id'] ?>">edit</a>



</div>

<?php




}


?>




</body>
</html>