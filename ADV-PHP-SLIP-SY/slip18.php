<html>
<body>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
enter distance:
<input type="number" name="t1">
<input type="radio" value="cent" name="t3">centimeter to <br>
<input type="radio" value="kilo" name="t3">kilometer to<br>
<input type="submit" value="ok">
</html>
</body>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$p1=$_POST["t1"];
$ch=$_POST["t3"];
switch($ch)
{
case "cent":$p1=$p1*100;
echo("diastnece in centimeter=".$p1);
break;
case "kilo":$p1=$p1*1000;
echo("diastnece in kilometer=".$p1);
break;
}
}

?>



