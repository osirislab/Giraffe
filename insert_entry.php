<?php
error_reporting(E_ALL);
$mysqli = new mysqli('localhost','sqli','this_is_a_password','giraffe');

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// if(!isset($_POST['username']) && count($_POST['username']) > 255){
	// 	exit();
	// }
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['profile'])){
		$password = mysql_real_escape_string(md5($_POST['password']));
		$username = mysql_real_escape_string($_POST['username']);
		$profile = mysql_real_escape_string($_POST['profile']);

		$query = $mysqli->prepare('INSERT INTO sqli (username, password, profile) VALUES (?, ?, ?)');
		$query->bind_param('sss', $username, $password, $profile);
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
			Username<input type="text" name="username"><br>
			Password<input type="text" name="password"><br>
			Profile<input type="text" name="profile"><br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>