<!DOCUMENT>
<html>
	<body>
		Operator Pembagian
		<br>
		<br>
		<form method="POST">
		<input type="text" name="bilangan1" value="1">
		<input type="text" name="bilangan2" value="1">
		<input type="submit" name="submit" value="=">
		<?php
			$jumlah=$_POST['bilangan1'] / $_POST['bilangan2'];
			echo''.floor($jumlah).'';
		?>
	</body>
</html>