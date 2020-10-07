
<?php
include 'layouts/header.php';
include 'shortcut/conn.php';
if(isset($_GET['usertype'])){

	$usertype = $_GET['usertype'];
if (isset($_GET['id'])) 
  {
$id = $_GET['id'];

$result= mysqli_query($conn,"SELECT * FROM $usertype where id=$id ");
$data= mysqli_fetch_array($result);

include 'layouts/form.php';

if(isset($_POST['user'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address']))
  {
    

$user =$_POST['user'];
$name =$_POST['name'];
$phone =$_POST['phone'];
$address =$_POST['address'];
$email =$_POST['email'];
$qualification =$_POST['qualification'];
$experience =$_POST['experience'];
$about =$_POST['about'];
  
  
  $sql = "UPDATE  `$usertype` SET  user ='$user', name ='$name', phone ='$phone', address ='$address', email ='$email', qualification ='$qualification', experience = '$experience', about= '$about' WHERE id=$id " ;
  if(mysqli_query($conn,$sql)){
    echo "updated";
    header ('location:index.php');
   }
    else{
    echo "error".$id;
    
      }
    }
  }
}

?>