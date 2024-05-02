<html>
<body>
<form method="post" action="slip133.php">
enter emp name:
<input type="text" name="t1" value="<?php if(isset($_POST['t1'])) echo($_POST['t1']);?>"><br>

enter eno:
<input type="text" name="t2" value="<?php if(isset($_POST['t2'])) echo($_POST['t2']);?>"><br>
enter sal:
<input type="text" name="t3" value="<?php if(isset($_POST['t3'])) echo($_POST['t3'])?>"><br>

<input type="submit" value="ok">
</html>
</body>
</form>

