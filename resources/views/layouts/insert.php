<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="process.php">
        Username:<br>
		<input type="text" name="username" required>
		<br>
		Word:<br>
		<input type="text" name="word" required>
		<br>
		Point:<br>
		<input type="number" name="point" required>
		<br>
		Start time:<br>
		<input type="time" name="starttime" required>
		<br>
        Created at:<br>
		<input type="date" name="createdat" required>
		<br>Updated at:
        <br>
		<input type="time" name="updatedat" required>
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>