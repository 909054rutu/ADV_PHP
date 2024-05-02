

<?php
echo("<table border='1'>");
echo"
<tr><th>server</th>
<th>info</th>
</tr>";
foreach($_SERVER as $key=>$value)
{
echo("<tr>
<td>{$key}</td>
<td>{$value}</td>
</tr>");
}
?>