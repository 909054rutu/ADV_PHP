<?php
class emp
{
public $ename,$dname,$bsal,$da,$hra,$ta,$it,$pf,$pt,$gross,$ded,$net;
function __construct($ename,$dname,$bsal)
{
$this->ename=$ename;
$this->dname=$dname;
$this->bsal=$bsal;
}
function cal_gross()
{
$this->da=$this->bsal*15/100;
$this->hra=$this->bsal*25/100;
$this->ta=$this->bsal*10/100;
$this->gross=$this->da+$this->hra+$this->ta;
}
function cal_deduction()
{
$this->it=$this->bsal*5/100;
$this->pf=$this->bsal*7/100;
$this->pt=$this->bsal*9/100;
$this->ded=$this->it+$this->pf+$this->pt;
}
function cal_net_sal()
{
$this->net=($this->bsal)+($this->gross)-$this->ded;
}
function disp()
{
echo("<br>emp name=".$this->ename);
echo("<br>emp dep=".$this->dname);
echo("<br>basic sal=".$this->bsal);
echo("<br>da=".$this->da);
echo("<br>hra=".$this->hra);
echo("<br>ta=".$this->ta);
echo("<br>it=".$this->it);
echo("<br>pf=".$this->pf);
echo("<br>pt=".$this->pt);
echo("<br>gross=".$this->gross);
echo("<br>ded=".$this->ded);
echo("<br>net=".$this->net);
}
}
$ob=new emp("om","computer",70000);
$ob->cal_gross();
$ob->cal_deduction();
$ob->cal_net_sal();
$ob->disp()
?>


