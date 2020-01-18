<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form Page</title>
	</head>
	<body>
		<?php 
			echo $fullName . '<br />';
			echo $email . '<br />';
			echo $address . '<br />';
		?>
		<form action="">
			<label>Full Name</label><br />
			<input type="text" name="fullName" /><br />
			<label>Email</label><br />
			<input type="email" name="email" /><br />
			<label>Address</label><br />
			<input type="text" name="address" /><br /><br />
			<button type="submit" name="submit">Submit</button>
		</form>
	</body>
</html>