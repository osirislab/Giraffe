<?php
session_start();
?>

<html>
	<head>
		<title>ISIS Giraffe - CSRF</title>
	</head>
	<body>

	Profile change page: 

	<form method="POST">
		<input type="text" name="email_address">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['email_address'])){
			$_SESSION['email'] = htmlentities($_POST['email_address']);
			echo("Your email address is now: ".htmlentities($_POST['email_address']));
			echo('<br/>');
		}
	}
	if(isset($_SESSION['email'])){
		echo('Your current email is: ');
		echo($_SESSION['email'].'<br/>');
	}
	?>
	</body>
</html>