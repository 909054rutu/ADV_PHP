<html>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
enter string:
<input type="text" name="r1">
<br>
<input type="submit" value="ok">
</html>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$s1=$_POST["r1"];
$k=strrev($s1);
echo("string are same=".$k);
}
?>