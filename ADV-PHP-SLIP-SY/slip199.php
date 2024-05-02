<?php
$xml=simplexml_load_file("rivi19.xml");
if(!$xml)
{
echo("file not found");
}
echo"<table border='1'>";
echo"<tr><th>name</th><th>price</th></tr>";
foreach($xml->fruit_info as $a)
{
echo("<tr><td>".$a->name."</td>");
echo("<td>".$a->price."</td></tr>");
}
?>