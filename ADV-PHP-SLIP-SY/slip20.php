<html>
<body>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
enter number:
<input type="number" name="t1" value="<?php if(isset($_POST['t1'])) echo($_POST['t1']);?>"><br>

<input type="radio" value="r1" name="t2">
<input type="radio" value="r2" name="t2">
<input type="submit" value="ok">
</form>
</html>
</body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$n=$_POST["t1"];
$ch=$_POST["t2"];
switch($ch)
{
case "r1":
$s=0;
while($n>0)
{
$d=$n%10;
$n=$n/10;
$s=$s+$d;
}
echo("sunm of digit=".$s);
break;
case"r2":
$f=0;
$s=1;
$t;
for($i=0;$i<$n;$i++)
{
echo(",".$f);
$t=$s+$f;
$f=$s;
$s=$t;
}
break;

}
}
?>

