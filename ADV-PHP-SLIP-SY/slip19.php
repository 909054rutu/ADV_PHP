<html>
<body>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
enter number:
<input type="number" name="t1" value="<?php if(isset($_POST['t1'])) echo($_POST['t1']);?>"><br>

<input type="submit" value="palindrome" name="t2">
<input type="submit" value="palindrome" name="t2">
</form>
</html>
</body>
