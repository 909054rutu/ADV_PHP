<html>
<body>
<form method="post" action="">
enter length:
<input type="text" name="r1"><br>
enter breadth:
<input type="text" name="r2"><br>
ente choice :1 add 2.sub 3.mul
<input type="text" name="p1"><br>
<input type="submit" value="ok">
</html>
</form>
<?php
class cal
{
public $a,$b;
function __construct($a,$b)
{
$this->a=$a;
$this->b=$b;
}
function add()
{
$c=$this->a+$this->b;
echo("<br>add=".$c);
}
function mul()
{
$c=$this->a*$this->b;
echo("<br>mul=".$c);
}
function div()
{
$c=$this->a/$this->b;
echo("<br>div=".$c);
}
}
$a=$_POST["r1"];
$b=$_POST["r2"];
$ob=new cal($a,$b);
$p2=$_POST["p1"];
switch($p2)
{
case 1:$ob->add();break;
case 2:$ob->mul();break;
case 3:$ob->div();break;
}


?>
