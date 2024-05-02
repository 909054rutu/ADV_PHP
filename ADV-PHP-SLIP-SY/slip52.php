<?php
abstract class shape
{
public abstract function area();
public abstract function volume();
}
class rectangle extends shape
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
function volume()
{
return 3.14*$this->l*$this->b;
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
return $this->r*$this->r;
}
function volume()
{
return 3.14*$this->r*$this->r;
}
}


$ob=new rectangle(7,8);
echo("area=".$ob->area());
echo("volume=".$ob->volume());
$ob=new circle(7);
echo("area=".$ob->area());
echo("volume=".$ob->volume());
?>
