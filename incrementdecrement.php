<?php

$a=10;

echo ++$a ."<br/>";  /*pre increment*/

$c= ++$a + $a-- -$a++ - --$a;  /* complete operation*/

echo $c."<br/>";


for ($a=0; $a<=10 ; $a++) 
{ 
	echo "$a";
}

for ($a=0; $a<=10 ; ++$a) 
{ 
	echo "$a<br/>";
}

for ($a=10; $a>=0 ; $a--) 
{ 
	echo "$a <br/>";
}
?>
/*----------- For loop---------------*/
<?php

for ($i=0; $i<=10 ; $i++) 
{ 
	echo "<br/>".$i;
}

for ($num=1; $num<=10; $num+=2) 
{ 
	echo "<br/>".$i;
}
?>
/*----------- while loop---------------*/

<?php
 $i= 1;

 while ($i <=50) {
 	echo $i;
 	$i++;
 }
?>








?>