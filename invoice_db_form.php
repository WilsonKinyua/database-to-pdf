<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'invoicedb')


?>

<!DOCTYPE html>
<html>
<head>
	<title>Invoice generator</title>
</head>
<body>
		Select invoice:
		<form method='get' action='invoice_db.php'>
			<select name='invoiceID'>
				<?php
					$query=mysqli_query($con,'select * from invoice');
					while($invoice=mysqli_fetch_array($query)){
						echo "<option value='".$invoice['invoiceID']."'>".$invoice['invoiceID']."</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form>
</body>
</html>