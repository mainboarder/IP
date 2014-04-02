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
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<div class="text-center" style="margin-top:11%;">
	<div class="alert-success">
		{if $cache eq 'cached'}
		Dies ist das Profil eines anderen Benutzers
		{elseif $cache eq 'unknown'}
		Dieser Browser ist nicht bekannt. Vielleicht wurde das Profil gelöscht.
		{else}
		Link zu diesem Profil: <pre>http://ip.mainboarder.de/?browser={$link}</pre>
	{/if}
	</div>
	<h2><strong>{$ip}</strong></h2>
	<p style='font-family:sans-serif;'>{$useragent}<br />
		{$host}<br /></p>
	<p><br /></p>
<a href="/" class="btn btn-primary">Reload</a>
</div>
	<footer class="text-center"><small><a href="https://github.com/mainboarder/IP">Github</a>
		| <a href="http://mainboarder.de/impressum" rel="nofollow">Impressum</a></small></footer>
    </body>
</html>
