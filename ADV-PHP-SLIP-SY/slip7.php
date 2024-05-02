<?php
interface I1
{
function gmtokg($kg);
function kgtomg($mg);
}
class demo implements I1
{
function gmtokg($kg)
{
$mg=$kg*1000;
echo("kgtomg=".$mg);
}
function kgtomg($mg)
{
$kg=$mg/1000;
echo("kgtomg=".$kg);
}
}
$ob=new demo();
$ob-> gmtokg(8);
$ob-> kgtomg(7);
?>