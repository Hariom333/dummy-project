
<?php
include "conn.php";
include "header.php";
if(isset($_POST['done']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$q= "select * from crd"; 
$query=mysqli_query($conn,$q);

}
?>

<div class="container">
<div class="col-lg-12">
<h1 class="text-warning text-center">Display Table data</h1>
<table class="table table-striped table-hover table-bordered">
<tr>
<th>id </th>
<th>username </th>
<th>password </th>
<th>Delete </th>
<th>Update </th>

</tr>

<?php
include "conn.php";
$q= "select * from crd"; 
$query=mysqli_query($conn,$q);
while($res= mysqli_fetch_array($query)){

?>


<tr>
<td><?php echo $res['id'];?> </td>
<td><?php echo $res['username'];?> </td>
<td><?php echo $res['password'];?> </td>
<td><button class="btn btn-default"><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">delete</a></button> </td>
<td><button class="btn btn-default"><a href="update.php?id=<?php echo $res['id'];?>" class="text-white">update</a></button> </td>


</tr>
<?php  } 

?>



</table>
</div>
</div>



</body>
</html>