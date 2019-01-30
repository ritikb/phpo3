<?php

$username ="admin";
$password ="12345";

/* AND operator*/

if ($username =='admin' && $password =='1234') 
{
	echo 'welcome';
}

else
{
	echo "please check your username and password";
}

/* OR operator*/

$username ="admin";
$password ="12345";

if ($username =='admin' || $password =='1234') 
{
	echo 'welcome';
}

else
{
	echo "please check your username and password";
}

/* Not operator*/

$username ="admin";
$password ="12345";

if ($username =='admi' || $password !='1234') 
{
	echo 'welcome';
}

else
{
	echo "please check your username and password";
}
?>