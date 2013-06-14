<?php
	session_start();
	$db = mysql_connect('localhost', 'sqli', 'this_is_a_password') or die('Could not connect: ' . mysql_error());
	$db = mysql_select_db("giraffe", $db);
?>

<html>
	<head>
		<title>ISIS Giraffe - SQLi</title>
	</head>
	<body>
		<h2>SQL Injection</h2>
		<p>SQL Injection is commonly due to developers directly concatenating user controlled input into a SQL query without any sanitiziation or escaping. This allows the user to input valid SQL commands allowing for dangerous manipulations of the database.</p>
		<p>Below are the profiles of some hackers who wanted to help you learn SQL injection. Try it out. And keep an eye on the address bar!</p>
		<?php
			if(isset($_GET['id'])){
				$result = mysql_query('SELECT profile FROM sqli WHERE id='.$_GET['id']);

				if (!$result) {
				    $message  = 'Invalid query: ' . mysql_error() . "\n";
				    die($message);
				}
				
				while ($row = mysql_fetch_assoc($result)) {
				    echo $row['profile'].'<br>';
				}
			}
			else{
				$result = mysql_query('SELECT id, username from sqli');
				while ($row = mysql_fetch_assoc($result)) {
				    echo("<a href='sqli.php?id={$row['id']}'>{$row['username']}</a><br>");
				}
			}
		?>
	</body>
</html>