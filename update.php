<?php
include "conn.php";
include "header.php";

if(isset($_POST['done']))
{
	$id=$_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$q= "update crd set id=$id, username='$username', password='$password' where id=$id ";
$query=mysqli_query($conn,$q);
header('location:display.php');
}
?>

<div class="col-lg-6 m-auto">
<form method="post" action="">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center">update operation </h1>
</div><br>
<label>username:</label>
<input type="text" name="username" class="form-control"><br>
<label>password</label>
<input type="text" name="password" class="form-control"><br>
<button class="btn btn-primary" type="submit" name="done">submit</button>
</div>
</form>
</div>
</body>
</html>