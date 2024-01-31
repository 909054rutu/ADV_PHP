2) Write a PHP program to create a class Worker that has data members as
Worker_Name, No_of_Days_worked, Pay_Rate. Create and initialize the object
using default constructor, Parameterized constructor. Also write necessary member
function to calculate and display the salary of worker.

<?php
class worker
{
public $w_name,$no_day,$pay_rate,$sal;
function __construct($w_name,$no_day,$pay_rate)

{
$this->w_name=$w_name;
$this->no_day=$no_day;
$this->pay_rate=$pay_rate;
}
function cal()
{
$this->sal=$this->no_day*$this->pay_rate;
}
function disp()
{
echo("<br>worker name=".$this->w_name);
echo("<br>worker no day=".$this->no_day);
echo("<br>pay rate=".$this->pay_rate);
echo("<br>worker sal=".$this->sal);
}
}
$ob=new worker("sai",7,9000);
$ob->cal();
$ob->disp();
?>
