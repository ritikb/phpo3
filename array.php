<?php

/*$variable =array();//function call array keyword (php run web application) ( key =>value start)

$variable[10]=2;
$variable['abc']='pn';

echo $variable[10]."<br>";
echo $variable['abc'];
*/


//
$s =array();

$s['a']=3;  // array index  is also declare as string 
$s[0]=4; 
$s[1]=5;

$s[]=1;
$s[]="vjdjd";

//echo."<pre>";
// print_r($s) ;//print_r are used as debugging

echo $s[0]."<br>";
echo $s[1]."<br>";
echo $s[3]."<br>";
echo $s[2]."<br>";
echo $s['a']."<br>";


$students = array(2,"ram","mohit"); //same type of data//

//print_r($students);
echo $students[0];

$teacher =array('name'=>'vikas','roll'=>123,'add'=>'jainhostel','phone'=>'22343212'); //key=>value index=>data
//echo $teacher[10]."<br/>";
//echo $teacher['abc'];
echo"<pre>";
print_r($teacher);

//echo $teacher['roll']."<br/>";
//echo $teacher['name'];
?>

<?php

$students = array('vikas'=>array('age'=>20,'marks'=>40,'class'=>'MCA'),
                 'rahul'=>array('age'=>40,'marks'=>50,'class'=>'bca'));

$college = array('mpct'=>array('teacher'=>array('bca'=>3,'mca'=>5),'class'=>40));

echo "<pre>";
print_r($college);

//echo $students['vikas']['marks'];
//echo $college ['mpct']['teacher']['bca'];




?>