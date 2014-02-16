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
<pre>
&lt;form method=&quot;POST&quot;&gt;
	&lt;input type=&quot;text&quot; name=&quot;email_address&quot;&gt;
	&lt;?php
		if ($_SERVER[&#39;REQUEST_METHOD&#39;] == &#39;POST&#39;){
			if(isset($_POST[&#39;email_address&#39;]) &amp;&amp; isset($_POST[&#39;nonce&#39;]) &amp;&amp; 
			$_POST[&#39;nonce&#39;] == $_SESSION[&#39;nonce&#39;]){
				$_SESSION[&#39;email&#39;] = htmlentities($_POST[&#39;email_address&#39;]);
				echo(&#39;&lt;br/&gt;&#39;);
				echo(&quot;Your email address is now: &quot;.htmlentities($_POST[&#39;email_address&#39;]));
			}
		}

		$x = sha1(rand());
		$_SESSION[&#39;nonce&#39;] = $x;
		echo &quot;&lt;input type=&#39;hidden&#39; name=&#39;nonce&#39; value=&#39;&quot;.$x.&quot;&#39;&gt;&quot;;
	?&gt;
&lt;/form&gt;

&lt;?php
if(isset($_SESSION[&#39;email&#39;])){
	echo(&#39;Your current email is: &#39;);
	echo($_SESSION[&#39;email&#39;].&#39;&lt;br/&gt;&#39;);
}
?&gt;
</pre>
	</body>
</html>