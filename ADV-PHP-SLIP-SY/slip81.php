<html>
<body>
<form method="post" action="">
enter length:
<input type="text" name="r1"><br>
enter breadth:
<input type="text" name="r2"><br>
enter radious:
<input type="text" name="r3"><br>
ente choice :1 trinagle 2.circle 3.square
<input type="text" name="p1"><br>
<input type="submit" value="ok">
</html>
</form>
<?php
abstract class shape
{
public abstract function area();
}
class triangle extends shape
{
private $l,$b;
function __construct($l,$b)
{
$this->l=$l;
$this->b=$b;
}
function area()
{
return $this->l*$this->b;
}
}
class circle extends shape
{
private $r;
function __construct($r)
{
$this->r=$r;
}
function area()
{
return 3.14*$this->r*$this->r;
}
}
class square extends shape
{
private $r;
function __construct($r)
{
$this->r=$r;
}
function area()
{
return $this->r*$this->r;
}
}
{
$p10=$_POST["p1"];
switch($p10)
{
case 1:
$ob=new triangle(7,8);
echo("<br>rectangle=".$ob->area());
break;
case 2:
$ob=new circle(7);
echo("<br>rectangle=".$ob->area());
break;
case 3:
$ob=new square(7);
echo("<br>rectangle=".$ob->area());
}
}
?>