<?php
session_start();
?>

<html>
	<head>
		<title>OSIRIS Giraffe - CSRF</title>
	</head>
	<body>
	<h2>Cross Site Request Forgery</h2>
	<p>Cross Site Request Forgery (CSRF) stems from the fact that HTTP is stateless and as such the server cannot tell whether a request was actually initiated by a user or by their browser. HTML forms to any site can be automatically submitted by any page opened by the browser using Javascript. The browser will send the cookie authenticating the user and the server is none the wiser that the user did not actually submit that form.</p>

	<p>CSRF protection typically involves the server generating a random nonce which is required to be on all forms submitted by the user. This is not the only available protection but most CSRF protections are based around creating a required form value which an attacker cannot predict.</p>

	<p>The below form is an example of a form vulnerable to CSRF.</p>

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
<pre>
&lt;form method=&quot;POST&quot;&gt;
	&lt;input type=&quot;text&quot; name=&quot;email_address&quot;&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER[&#39;REQUEST_METHOD&#39;] == &#39;POST&#39;){
	if(isset($_POST[&#39;email_address&#39;])){
		$_SESSION[&#39;email&#39;] = htmlentities($_POST[&#39;email_address&#39;]);
		echo(&quot;Your email address is now: &quot;.htmlentities($_POST[&#39;email_address&#39;]));
		echo(&#39;&lt;br/&gt;&#39;);
	}
}
if(isset($_SESSION[&#39;email&#39;])){
	echo(&#39;Your current email is: &#39;);
	echo($_SESSION[&#39;email&#39;].&#39;&lt;br/&gt;&#39;);
}
</pre>
	</body>
</html>
