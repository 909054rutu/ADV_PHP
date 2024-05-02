<html>
<body>
<form method="post" action="">
enter temp to farn:
<input type="text" name="t1" value="<?php if(isset($_POST['t1'])) echo($_POST['t1']);?>"><br>
<input type="submit" value="ok">
</html>
</body>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $n1=$_POST["t1"];
    $f=($n1*9/5)+32;
    echo("<h2><br> Temperature Fahrenheit -: " .$f);
}
?>