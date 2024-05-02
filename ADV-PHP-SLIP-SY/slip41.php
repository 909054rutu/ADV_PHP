<?php

$xml=simplexml_load_file("slip4.xml");
if(!$xml)
die("file not found");
foreach($xml->cricket as $a)
{
if($a->runs>200 && $a->wickets>50)
{
echo("<br><br>player=".$a->player);
echo("<br><br>runs=".$a->runs);
echo("<br><br>wickets=".$a->wickets);
}
}
?>