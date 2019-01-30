<?php
$fnm=$_POST['fnm'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$contact=$_POST['contact'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];


$conn=mysqli_connect('localhost','root','','pninfosysnew');

if ($conn) {
	echo "connection success";
}
else{
	echo "connection failed";
}
$sql="insert into curd(fnm,email,pwd,contact,dob,gender) values('$fnm','$email','$pwd','$contact','$dob','$gender')";
$run=mysqli_query($conn,$sql);
if ($run==true) {
	echo "data submitted successfully";
	
}
else
{
	echo "data submission failed";
}
?>