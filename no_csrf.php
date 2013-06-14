<?php
session_start();
?>

<html>
	<head>
		<title>ISIS Giraffe - NoCSRF</title>
	</head>
	<body>
	<p>CSRF protection typically involves the server generating a random nonce which is required to be on all forms submitted by the user. This is not the only available protection but most CSRF protections are based around creating a required form value which an attacker cannot predict.</p>

	<p>The below form is an example of a form NOT vulnerable to CSRF. Try refreshing the page and looking at the source to see the random nonce.</p>

	Profile change page: 

	<form method="POST">
		<input type="text" name="email_address">
		<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				if(isset($_POST['email_address']) && isset($_POST['nonce']) && $_POST['nonce'] == $_SESSION['nonce']){
					$_SESSION['email'] = htmlentities($_POST['email_address']);
					echo('<br/>');
					echo("Your email address is now: ".htmlentities($_POST['email_address']));
				}
			}

			$x = sha1(rand());
			$_SESSION['nonce'] = $x;
			echo "<input type='hidden' name='nonce' value='".$x."'>";
		?>
	</form>

	<?php
	if(isset($_SESSION['email'])){
		echo('Your current email is: ');
		echo($_SESSION['email'].'<br/>');
	}
	?>
	</body>
</html>