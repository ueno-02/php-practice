<?php require '../header.php'; ?>
	<form action="select-for-output.php" method="post">
	<select name="count">
<?php
	$1 = 0;
	while ($i < 10) {
		// code...
		echo '<option value="', $i, '">', $i, '</option>';
	}
?>
	</select>
	<p><input type="submit" value="確定"></p>
	</form>
<?php require '../footer.php'; ?>
