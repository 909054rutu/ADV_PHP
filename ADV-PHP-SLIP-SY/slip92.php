<html>
<body>
<form method="post" action="">
<input type="radio" value="1" name="t1">insert element<br>
<input type="radio" value="2" name="t1">delete elemenr<br>
<input type="radio" value="3" name="t1">conten<br>
<input type="submit" value="ok">
</html>
</form>
<?php
$ch=$_POST["t1"];
{
$a=array(1,2,3,4,5,6,7,8,9,10);
switch($ch)
{
case "1":array_push($a,10);
print_r($a);
break;
case "2":array_pop($a);
print_r($a);
break;
case "3":print_r($a);
break;
}
}
?>