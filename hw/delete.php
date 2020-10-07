<?php
include 'shortcut/conn.php';

if(isset($_GET['usertype'])){

	$usertype = $_GET['usertype'];
	
	if (isset($_GET['id'])) 
	{
		$id = $_GET['id'];
		mysqli_query($conn, "DELETE FROM `$usertype` WHERE id=$id");
		
		header('location: index.php');
	}else
	echo $usertype;
	
}


?>