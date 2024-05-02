<?php
class college
{
}
class emp extends college
{
public $ename,$eno;
function accept()
{
}
function disp()
{
}
}
$ob=new emp();
$a=get_declared_classes();
echo("declared classes");
print_r($a);
$a=get_class_methods("emp");
echo("get class method");
print_r($a);
$a=get_class_vars("emp");
echo("get class vars");
print_r($a);
?>