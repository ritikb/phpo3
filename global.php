<?php
$firstname ="pninfosys";//local variable
$lastname="php";

function example()
{
	global $firstname; //global variable
	echo $firstname;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?php example(); ?></h1>
	<h1><?php example2(); ?></h1>

</body>
</html>