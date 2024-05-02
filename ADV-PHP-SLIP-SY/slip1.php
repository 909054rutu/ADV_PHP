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
return $this->a+$this->b;
}

function sub()
{
return $this->a-$this->b;
}
}
$ob=new cal(2,3);
echo("add=".$ob->add());
echo("sub=".$ob->sub());

?>
