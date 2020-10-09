<?php 

include 'header.php'; 
?>

<form action="php/login.php" method="POST">


<label for="username">username</label>
<input type="text" name="username">

<label for="password">password</label>
<input type="password" name="password">

<button type="submit" name="login" >submit</button>

</form>