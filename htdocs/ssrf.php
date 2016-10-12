<?php
    if(isset($_GET['r'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_GET['r']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>OSIRIS Giraffe - SSRF</title>
    </head>

    <body>
        <h2>Server Side Request Forgery</h2>

        <p>
            Server Side Request Forgery (SSRF) is a vulnerability that gives an attacker the ability to create requests from a vulnerable server. SSRF attacks are commonly used to target not only the host server itself, but also hosts on the internal network that would normally be inaccessible due to firewalls.
        </p>
        <p>
            SSRF allows an attacker to:
        <ul>
            <li>Scan and attack systems from the internal network that are not normally accessible</li>
            <li>Enumerate and attack services that are running on these hosts</li>
            <li>Exploit host-based authentication services</li>
        </ul>
        </p>
        <p>
            As is the case with many web application vulnerabilities, SSRF is possible because of a lack of user input validation. For example, a web application that accepts a URL input in order to go fetch that resource from the internet can be given a valid URL such as http://google.com
But the application may also accept URLs such as:
        <ul>
        <li>http://localhost</li>
        <li>http://10.0.0.1</li>
        <li>file:///localhost/example.txt</li>
        <li>127.0.0.1:22</li>
        </ul>
        When those kinds of inputs are not validated, attackers are able to access internal resources that are not intended to be public.
        </p>

        <p>
            Below is an example that takes a URI as an input and passes it to the PHP curl_exec() function.
        </p>

        <div>
            <p>Enter a URI to fetch</p>

            <form method="GET" action="#">
            <span>IP: 
                <input name="r" type="text" placeholder="uri://example.com" />
                <input type="submit" />
            </span>
            
            </form>
        </div>  

        <pre>
            
&lt;?php
    if(isset($_GET['r'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_GET['r']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }
?&gt;
        </pre>
    </body>

</html>
