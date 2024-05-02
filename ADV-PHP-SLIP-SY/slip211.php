<?php
$xml=simplexml_load_file("slip20.xml");
if(!$xml)
die("not found");

foreach($xml->computer as $a)
{
if($a->cname=='sybbaca')
{
echo("name=".$a->name);
echo("name=".$a->cname);
}
}
?>