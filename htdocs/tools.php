<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>OSIRIS Giraffe</title>
	</head>
	<body>
		<h1>Tools</h1>
		<p>There are many tools used in web security which all aim to make the life of a pentester and to reveal more information about a web app. Here are some of those free tools.</p>

		<h2><a href="http://portswigger.net/burp/">The Burp Suite</a></h2>
		<p>The Burp Suite is a set of tools written by PortSwigger. It's most commonly used feature is its HTTP Proxy which acts as a go-between for your browser and the server. It allows you to view, control, and modify requests and responses sent and recieved by your browser. It also features tools to repeat these requests back to the server (Burp Repeater), send a list of paylods to a server (Burp Intruder/Scanner),enumerate a server's files (Burp Spider), a encoded text decoder (Burp Decoder), and a randomness tester (Burp Sequencer). Burp also has extensibility plugins which means you can write your own Burp plugins if you so wish.</p>
		<strong>BURP IS A MUST HAVE!</strong>

		<h2><a href="https://www.google.com/intl/en/chrome/browser/">Google Chrome</a></h2>
		<p>Google's popular browser is one of the most versatile tools available. Besides being a great browser, its Inspector tool can provide quick insight into a web app in a short amount of time.</p>
		<p>Useful Extensions</p>
		<ul>
			<li><a href="https://chrome.google.com/webstore/detail/edit-this-cookie/fngmhnnpilhplaeedifhccceomclgfbg?hl=en">Edit This Cookie</a></li>
			<li><a href="https://chrome.google.com/webstore/detail/user-agent-switcher-for-c/djflhoibgkdhkhhcedjiklpkjnoahfmg?hl=en">User Agent Switcher</a></li>
		</ul>

		<h2><a href="http://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a></h2>
		<p>Firefox, an also popular browser, has no Reflected XSS filter. This can aid in testing that of bug. Aside from that, I do not personally see a benefit to using Firefox as opposed to Chrome. Chrome's Inspector will notify you if it refused to execute a script if it is found in the request.</p>

		<h2>Nmap</h2>
		<p>Nmap is a useful network mapper that is used to discover hosts and their services on a network. Nmap is one of the most useful tools and can help you find sites not operating on port 80 or 443.</p>

		<h2><a href="https://github.com/TheRook/subbrute">SubBrute</a></h2>
		<p>SubBrute uses a list of subdomains to attempt to find subdomains on a site. This can uncover extremely vulnerable attack surface</p>

		<h2><a href="https://github.com/iSECPartners/sslyze">SSLyze</a></h2>
		<p>SSLyze is a tool from iSEC Partners which can determine what SSL options are available to an attacker. Weak ciphers, renegotiation, SSL version (SSLv2, SSLv3, TLSv1/1.1/1.2).</p>
	</body>
</html>
