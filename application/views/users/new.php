<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="/users/create" method='post'>
		<input type="hidden" name='action' value='feature'>

		<label for="fname">First Name: </label>
		<input type="text" name='fname' id='fname'>

		<label for="lname">Last Name: </label>
		<input type="text" name='lname' id='lname'>

		<label for="address">Address: </label>
		<input type="text" name='address' id='address'>

		<input type="submit" value='Submit'>

	</form>
</body>
</html>