<!DOCTYPE html>
<html>
<head>
	<title>Form Page 1</title>
</head>
<body>
	<h1>Page 1: Contact Information</h1>
	<form method="post" action="page2.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br>

		<label for="phone">Phone Number:</label>
		<input type="tel" name="phone" id="phone" required><br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br>

		<input type="submit" value="Next">
	</form>
</body>
</html>
