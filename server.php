<?php

echo $_SERVER['HTTP_HOST']."<BR/>";
echo $_SERVER['HTTP_USER_AGENT']."<BR/>";
echo $_SERVER['REMOTE_ADDR']."<BR/>";
echo $_SERVER['SERVER_PORT']."<BR/>";
echo $_SERVER['PHP_SELF']."<BR/>";

function show()
{
	return $_SERVER['HTTP_HOST'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h4>server name<?php echo show();?></h4>
</body>
</html>