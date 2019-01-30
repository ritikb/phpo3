<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','pninfosysnew');

$sql="delete from curd where id='$id'" or die(mysql_error());
$run=mysqli_query($conn,$sql);
if ($run==true) {
	echo "record deleted";
	 
}
else{
	echo "failed to delete record";
}
?>