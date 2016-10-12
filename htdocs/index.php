<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ISIS Giraffe</title>
	</head>
	<body>
		<p>
		Welcome to OSIRIS Giraffe.</p>
		<a href="tools.php">Here are some tools that might help you</a><br/>
		<br/>
		<a href="xss.php">Try some Cross Site Scripting</a><br/>
		<br/>
		<a href="csrf.php">Try some Cross Site Request Forgery</a><br/> 
		<a href="no_csrf.php">See if you can make your CSRF exploit work here</a><br/> 
		<br/>
		<a href="sqli.php">Try some SQL Injection</a><br/>
        <a href="insert_entry.php">Insert entries into the SQL database</a><br/>

        <a href="commandi.php">Try some command injection</a><br/>
        <a href="ssrf.php">Try some server side request forgery</a><br/>
        <a href="dir_trav.php">Try some directory traversal</a><br/>
        
	</body>
</html>
