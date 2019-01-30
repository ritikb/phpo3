<?php
echo $id=$_POST['id'];
echo $fnm=$_POST['fnm'];
echo $email=$_POST['email'];
echo $pwd=$_POST['pwd'];
echo $contact=$_POST['contact'];
echo $city=$_POST['dob  '];

echo $gender=$_POST['gender'];

$conn=mysqli_connect('localhost','root','','pninfosysnew');

if ($conn==true) {
echo "connect"	;# code...
}
else {
	echo "not";
}
$sql="update curd set fnm='$fnm',email='$email',pwd='$pwd',contact='$contact',dob='$dob',gender='$gender' where id='$id'";

$run=mysqli_query($conn,$sql);
if ($run==true) {
	echo "record updated";
	header('location:show.php');
}
else{
	echo mysqli_error($conn);
	echo "failed to update record";
}



?>