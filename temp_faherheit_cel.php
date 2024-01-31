<?php
class temp
{
public $c,$f;
function __construct($c,$f)
{
$this->c=$c;
$this->f=$f;
}
function convert_c_to_f()
{
$ans=$this->c*9/5+32;
echo("<br>convert celcius to faherheit=".$ans);
}
function convert_f_to_c()
{
$ans=$this->f-32*5/9;
echo("<br>convert celcius to faherheit=".$ans);
}
}
$ob=new temp(20,33);
$ob->convert_c_to_f();
$ob->convert_f_to_c();
?>