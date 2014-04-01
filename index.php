<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sysinfo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<div class="text-center" style="margin-top:11%;"><?php
    $ip = $_SERVER['REMOTE_ADDR'];  
    $host = gethostbyaddr($ip);

    echo "<h2><strong>$ip</strong></h2><p style='font-family:sans-serif;'>
";  
    echo $_SERVER['HTTP_USER_AGENT'] . "<br />
";
    echo "$host <br />
";
?><p><br /></p>
<a href="/" class="btn btn-primary">Reload</a>
</div>
    </body>
</html>
