<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Car</title>
</head>
<body>
	<h1>Create a Car</h1>
	<form action="cars.php?action=create" method="POST">
		<input type="text" name="car" placeholder="Car Make"/><br/>
    <input type="text" name="owner" placeholder="Owner's Name"/><br/>
    <input type="submit" value="Submit"/>
	</form>
</body>
</html>