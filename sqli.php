<?php
	session_start();
?>

<html>
	<head>
		<title>ISIS Giraffe - SQLi</title>
	</head>
	<body>
		<?php
			if(isset($_GET['id'])){
				$db = mysql_connect('localhost', 'sqli', 'this_is_a_password') or die('Could not connect: ' . mysql_error());
				$db = mysql_select_db("giraffe", $db);
				$result = mysql_query('SELECT * FROM sqli WHERE id='.$_GET['id']);

				if (!$result) {
				    $message  = 'Invalid query: ' . mysql_error() . "\n";
				    die($message);
				}
				while ($row = mysql_fetch_assoc($result)) {
				    echo print_r($row);
				}
			}
			echo "Running";
		?>
	</body>
</html>