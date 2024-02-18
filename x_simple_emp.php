<?php
$xml=simplexml_load_file("x_emp.xml");
if(!$xml)
die("file not found");

{
echo("<table border='1'>");
    echo("<tr><th>id</th><th>Name</th><th>p_no</th><th>D_birth</th><th>Gender</th></tr>");
foreach($xml->emp as $e)
{
echo("<tr>");
echo("<tr><td>".$e['id']."</td>");
echo("<td>".$e->name."</td>");
echo("<td>".$e->p_no."</td>");
echo("<td>".$e->d_birth."</td>");
echo("<td>".$e->gender."</td></tr>");
}
}
?>