<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
die("error");
}
$r1=$_POST["t1"];
mysql_query("use ajax");
$res=mysql_query("select*from stud where std='$r1'");
while($row=mysql_fetch_array($res))
{

echo("name=".$row[0]);
echo("per=".$row[1]);
echo("std=".$row[2]);
}
mysql_close($con);
?>
