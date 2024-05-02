<html>
<body>
<form method="post" action="">
enter string1 :
<input type="text" name="t1" value="<?php if(isset($_POST['t1'])) echo($_POST['t1']);?>"><br><br>
enter string2 :
<input type="text" name="t2" value="<?php if(isset($_POST['t2'])) echo($_POST['t2']);?>"><br><br>
<input type="submit" value="ok">
</html>
</body>
</form>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
if($s1==$s2)
echo("string area same");
else
echo("not");
?>
