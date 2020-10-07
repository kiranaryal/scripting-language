<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>edit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     
<?php
include 'shortcut/conn.php';
if(isset($_GET['usertype'])){

	$usertype = $_GET['usertype'];
if (isset($_GET['id'])) 
{
$id = $_GET['id'];

$result= mysqli_query($conn,"SELECT * FROM $usertype where id=$id ");
$data= mysqli_fetch_array($result);




include 'layouts/form.php';





if(isset($_POST['user'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['email'])&&isset($_POST['qualification'])&&isset($_POST['experience'])&&isset($_POST['about'])&&isset($_POST['usertype']))
{
  $user =$_POST['user'];
  $name =$_POST['name'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
  $email =$_POST['email'];
  $qualification =$_POST['qualification'];
  $experience =$_POST['experience'];
  $about =$_POST['about'];
  $usertype=$_POST['usertype'];
  
  
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