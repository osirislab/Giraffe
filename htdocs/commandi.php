<?php
    if(isset($_GET['ip'])) {
        $cmd = shell_exec( 'ping  -c 4 ' . $_GET['ip'] );
        echo "<pre>{$cmd}</pre>";
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>OSIRIS Giraffe - Command Injection</title>
    </head>

    <body>
        <h2>Command Injection</h2>

        <p>
            Command injection is achieved by taking advantage of unsanitized user input that gets evaluated as a command by the host operating system. This can be used to execute additional commands after the existing one.
        </p>

        <p>
            Below is an example that takes an IP address as an input and passes it to the *nix ping command:
        </p>

        <div>
            <p>Enter an IP to ping</p>

            <form method="GET" action="#">
            <span>IP: 
                <input name="ip" type="text" placeholder="xxx.xxx.xxx.xxx" />
                <input type="submit" />
            </span>
            
            </form>
        </div>  

        <pre>
            
&lt;?php
    if(isset($_GET['ip'])) {
        $cmd = shell_exec( 'ping  -c 4 ' . $_GET['ip'] );
        echo "&lt;pre&gt;{$cmd}&lt;/pre&gt;";
    }
?&gt;
        </pre>
    </body>

</html>
