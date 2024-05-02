<html>
<body>
<form method="post" action="">
enter radious:
<input type="text" name="r1"><br><br>
select 1.area 2.cirumfurnce
<input type="text" name="r4">
<input type="submit" value="ok">
</html>
</form>
</body>
<?php
class demo
{
public $r;
function __construct($r)
{
$this->r=$r;
}
function cir()
{
$c=$this->r*$this->r;
echo("area=".$c);
}
function area()
{
$d= 3.14*$this->r*$this->r;
echo("cir=".$d);
}
}

$r=$_POST["r1"];
$ob=new demo($r);
$p2=$_POST["r4"];
switch($p2)
{
case 1:$ob->cir();
break;
case 2:$ob->area();
break;
}

?>
