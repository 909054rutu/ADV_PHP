<html>
<body>
<form method="post" action="distance.php">
<h1>select option</h1><br>
<input type="radio" value="feet" name="r1">convert feet to inches<br>
<input type="radio" value="inch" name="r1">convert inches to feet<br>
Enter value:
<input type="text" name="t1"><br>
<input type="submit" value="submit"></form></body></html>


<?php
class Distance
{
function convert_feet_to_inches($feet)
{
$inches=$feet*12;
echo("<br>inches=".$inches);
}
function convert_inches_to_feet($inches)
{
$feet=$inches/12;
echo("<br>inches=".$feet);
}
}
$ob=new Distance();
$val=$_POST["t1"];
$ch=$_POST["r1"];
if($ch=="feet")
$ob->convert_feet_to_inches($val);
if($ch=="inch")
$ob->convert_inches_to_feet($val);
?>
