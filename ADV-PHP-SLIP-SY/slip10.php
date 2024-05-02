<?php
class college
{
}
class stud extends college
{
public $no,$sname;
function accept()
{
}
function disp()
{
}
}
$ob=new stud();
$a=get_class_vars("stud");
print_r($a);
$a=get_class_methods("stud");
print_r($a);
$a=get_declared_classes();
print_r($a);
?>

