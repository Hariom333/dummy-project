<?php
include "conn.php";
$id=$_GET['id'];

$q="delete from crd where id=$id ";
mysqli_query($conn,$q);
header('location:display.php');

?>