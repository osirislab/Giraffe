<?php
    if(isset($_GET['file'])) {
        $f = file_get_contents($_GET['file']);
        echo "<pre>{$f}</pre>";
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>OSIRIS Giraffe - File Traversal</title>
    </head>

    <body>
        <h2>File Traversal</h2>

        <p>
            When the user can provide the path of a file to fetch, it might be possible to fetch files from anywhere in the filesystem by using path traversal.
        </p>

        <p>
            Below is an example that takes a file name as an input and fetches the contents using the PHP get_file_contents() function.
        </p>

        <div>
            <p>Enter a file to fetch</p>

            <form method="GET" action="#">
            <span>File:
                <input name="file" type="text" placeholder="enter a file name" />
                <input type="submit" />
            </span>
            
            </form>
        </div>  

        <pre>
            
&lt;?php
    if(isset($_GET['file'])) {
        $f = file_get_contents($_GET['file']);
        echo "&lt;pre&gt;{$f}&lt;/pre&gt;";
    }
?&gt;
        </pre>
    </body>

</html>
