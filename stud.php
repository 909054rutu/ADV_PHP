<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die("error");
}
$r1=$_POST["t1"];
mysqli_database($con,"ajax");
$res=mysqli_qury($con,"select*from stud where std='$r1'");
while($row=mysqli_fetch_array($res))
{

echo("name=".$row[0]);
echo("per=".$row[1]);
echo("std=".$row[2]);
}
$con->close();
?>