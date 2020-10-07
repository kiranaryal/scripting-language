
<?php
include 'layouts/header.php';
$usertype =NULL;
include 'layouts/form.php';
include 'shortcut/conn.php';
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

  if($usertype){
  $sql = "INSERT INTO `$usertype` (`user`,`name`,`phone`,`address`,`email`,`qualification`,`experience`,`about`) VALUES ('$user','$name','$phone','$address','$email','$qualification','$experience','$about') " ;
  }
  else{
    echo "choose";
  }
 if(mysqli_query($conn,$sql)){
     }
}
 $usertype="student"; 
 include 'layouts/table.php';
?>
</br>
<br>
<br>
<br>
<div>
<?php
$usertype="teacher"; 
include 'layouts/table.php';
?>
</div>
</body>
</html>