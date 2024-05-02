<?php

$xml=simplexml_load_file("slip21.xml");
if(!$xml)
die("file not found");
foreach($xml->computer as $a)
{
if($a->per>90)
{
echo("<br><br>player=".$a->student_Name);
echo("<br><br>runs=".$a->class);
echo("<br><br>wickets=".$a->per);
}
}
?>
