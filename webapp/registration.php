<?php 

include 'header.php'; 
?>

<form action="php/register.php" method="POST">


<label for="username">username
</label>
<input type="text" name="username">
<label for="email">email</label>
<input type="email" name="email">
<label for="password">password</label>
<input type="password" name="password">
<label for="password2">password2</label>
<input type="password" name="password2">
<button type="submit" name="register" value="register">submit</button>

</form>