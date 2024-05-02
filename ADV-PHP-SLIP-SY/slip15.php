<html>
<body>
<form method="post" action="slip155.php">
subject:
<select name="t1[]" multiple='multiple'>
<option value="java" <?php if(in_array('java',$_POST['t1'])) echo("selected='selected' ");?>>java</option>
<option value="php" <?php if(in_array('php',$_POST['t1'])) echo("selected='selected' ");?>>php</option>
<option value="python" <?php if(in_array('python',$_POST['t1'])) echo("Selected='selected' ");?>>python</option>
</select>
<input type="submit" value="ok">
</html>
</form>
