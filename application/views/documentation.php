<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RestIgniter Documentation</title>

<style type="text/css">
body {
	background-color: #fff;
	margin: 40px;
	font-family: Lucida Grande, Verdana, Sans-serif;
	font-size: 14px;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #000;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 24px;
	font-weight: bold;
	margin: 24px 0 2px 0;
	padding: 5px 0 6px 0;
}

code {
	font-family: Monaco, Verdana, Sans-serif;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

dl {
	margin-left: 30px;
	background-color: #eee;
}

dt {
	font-weight: bold;
}

dd {
	margin-bottom: 10px;
}

pre {
	font-style: italic;
	margin-left: 10px;
	color: black;
	background-color: #999;
	padding: 6px;
}
</style>
</head>
<body>

<h1>RestIgniter documentation</h1>
[<a href="<?php echo site_url(''); ?>">Home</a>]
<h3>Introduction</h3>
<p>
RestIgniter can be used in these different ways:
</p>
<ol>
	<li>as a rest client to access other applications REST services <i>[<a href="<?php echo site_url('ex_rest_client'); ?>">Example</a>]</i></li>
	<li>as a rest server to allow other applications to access REST services <i>[<a href="<?php echo site_url('ex_rest_client2'); ?>">Example</a>]</i></li>
	<li>to automatically expose objects (packed as sparks) over REST <i>[<a href="<?php echo site_url('ex_expose'); ?>">Example</a>]</i></li>
</ol>
<hr/>
<h3>References</h3> 
<p>
Rest support is provided by Phil Sturgeon's amazing REST <a href="http://getsparks.org/packages/restclient/versions/HEAD/show" target="_blank">spark library</a>.<br/>
Here you can find a detailed info about his library:</p>
<ul>
<li><a href="http://philsturgeon.co.uk/blog/2009/06/REST-implementation-for-CodeIgniter">http://philsturgeon.co.uk/blog/2009/06/REST-implementation-for-CodeIgniter</a></li>
<li><a href="http://net.tutsplus.com/tutorials/php/working-with-restful-services-in-codeigniter-2/">http://net.tutsplus.com/tutorials/php/working-with-restful-services-in-codeigniter-2/</a></li>
</ul>
[So way 1) and way 2) are just implementations of Phil's library.]

<hr/>

<h3>API public methods</h3>
<p>This is a self generated list of the API public methods available at this URL: <a href="<?php echo site_url('api'); ?>" target="_blank"><?php echo site_url('api'); ?></a></p>
<?php echo !empty($methods_list) ? $methods_list : 'No public methods available'; ?>
You can see all the available methods for the REST server at this <a href="<?php echo site_url('api/methods')?>">URL</a>
<hr />

<h3>How to install</h3>
<p>
This will download the code to your /var/www/restigniter folder</p>
<pre>
cd /var/www/
git clone https://damko@github.com/damko/RestIgniter.git restigniter
</pre>
<p>
Edit application/config/rest.php and edit the $config['rest_server'] changing the hostname accordingly to your needs.
</p>


<hr />
[<a href="<?php echo site_url(''); ?>">Home</a>]
</body>
</html>
