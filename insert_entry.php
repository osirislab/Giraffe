<?php
error_reporting(E_ALL);
$mysqli = new mysqli('localhost','sqli','911921841a856fc1a830dfec6e18bca2','giraffe');

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// if(!isset($_POST['username']) && count($_POST['username']) > 255){
	// 	exit();
	// }
	if(isset($_POST['username']) && isset($_POST['password'])){
		$password = mysql_real_escape_string(md5($_POST['password']));
		$username = mysql_real_escape_string($_POST['username']);

		$query = $mysqli->prepare('INSERT INTO sqli (username, password) VALUES (?, ?)');
		$query->bind_param('ss', $username, $password);
		$query->execute();
	}
}
?>

<html>
	<head>
		<title>ISIS Giraffe - SQLi</title>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="username">
			<input type="text" name="password">
			<input type="submit" value="submit">
		</form>
	</body>
</html>