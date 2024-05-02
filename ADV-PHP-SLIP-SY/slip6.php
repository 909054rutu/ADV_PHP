
<?php
header("content-type:text/plain");
$url="http://www.college.com/science/cs.php";
$a=parse_url($url);
echo("scheme:".$a['scheme']."\n");
echo("host:".$a['host']."\n");
echo("path:".$a['path']."\n");
?>