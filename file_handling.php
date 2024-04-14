<?php
$f1=fopen("Myfile.dat","r");
$size=filesize("Myfile.dat");
$s=fread($f1,$size);
echo($s);
?>