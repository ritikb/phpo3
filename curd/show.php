<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<style>
		table{margin-top:100px; margin-left:50px; margin-right:50px; }
         h2{ color:red; font-family:verdana; font-size:28px;}

	</style>
</head>
<body bgcolor="solid green">
	<center>
		
		<form action="insert.php">
			<table border="2" cellpadding="5" cellspacing="5">
				<caption><h2>Show Data</h2></caption>

    <tr>
		<th>your Id</th>
		<th>your Name</th>	 
		<th>your email</th>
		<th>your Password</th>
		<th>your Mobile number</th>
		<th>your Dob</th>
		<th>your Gender</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

<?php
$conn=mysqli_connect('localhost','root','','pninfosysnew');
/*if ($conn) {
	echo "connection success";
}
else{
	echo "connection failed";
}*/

$sql= "select * from curd";

$run=mysqli_query($conn,$sql);

while ($result=mysqli_fetch_assoc($run))
 {
	?>
	<tr>
		<td><?php echo $result['id'];?></td>
		<td><?php echo $result['fnm'];?></td>
		<td><?php echo $result['email'];?></td>
	    <td><?php echo $result['pwd'];?></td>
        <td><?php echo $result['contact'];?></td>
        <td><?php echo $result['dob'];?></td>
        <td><?php echo $result['gender'];?></td>
    <td><a href="update1.php?id=<?php echo $result['id'];?>">Update</a></td>
    <td><a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>

	</tr><br>
	<?php
}
?>

</table>
</center>
</body>
</html>