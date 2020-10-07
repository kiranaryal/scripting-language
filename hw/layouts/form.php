<form action="" method="POST">
<table  style="width:20%;margin-left:0%;border:white;">
<tr>
<?php
if($usertype ){
  
}
else{
  
  ?>
<input type="radio" name="usertype" value="student" checked>student</button>
<input type="radio" name="usertype" value="teacher">teacher</button>
<?php
}
?>

</tr>
<tr></tr>
  <td>
    <label for="user">user</label>
  </td>
  <td>
    <input type="text" class="form-control" name="user" value="<?php echo ($data['user'] ?? ''); ?> " required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="name">name</label>
  </td>
  <td>
    <input type="text" class="form-control" name="name" value="<?php echo ($data['name'] ?? ''); ?>" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="phone">phone</label>
  </td>
  <td>
    <input type="number" class="form-control" name="phone"  value="<?php echo ($data['phone'] ?? ''); ?>" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="address">address</label>
  </td>
  <td>
    <input type="text" class="form-control" name="address" value="<?php echo ($data['address'] ?? ''); ?>" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="email">email</label>
  </td>
  <td>
    <input type="email" class="form-control" name="email"  value="<?php echo ($data['email'] ?? ''); ?>" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="qualification">qualification</label>
  </td>
  <td>
    <input type="text" class="form-control" name="qualification" value="<?php echo ($data['qualification'] ?? ''); ?>" required></div>
  </td>
</tr>
<tr>
  <td>
    <label for="experience">experience</label>
  </td>
  <td>
    <input type="text" class="form-control" name="experience" value="<?php echo ($data['experience'] ?? ''); ?>" required></div>
  </td>
</tr>
<tr>

<td>
  <label for="about">about</label>
</td>
<td>
<input type="text" class="form-control" name="about"  value="<?php echo ($data['about'] ?? ''); ?>" required>
</td>
</tr>
</table>

<button type="submit">submit</button>

</form>
