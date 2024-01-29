<?php
class calculator
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
    function mul()
    {
        return $this->a*$this->b;
    }
    function div()
    {
        return $this->a/$this->b;
    }
}
$ob=new calculator(10,10);
echo("<br>addition=".$ob->add());
echo("<br>sub=".$ob->sub());
echo("<br>mul=".$ob->mul());
echo("<br>div=".$ob->div());
?>