<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ex. Rest Client</title>

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
	font-size: 9px;
	margin-left: 10px;
	color: black;
	background-color: #999;
	padding: 6px;
}
</style>
</head>
<body>

<h1>Ex. Rest Client</h1>
[<a href="<?php echo site_url(''); ?>">Home</a>]
<p>
This is a very simple usage of the <a href="http://getsparks.org/packages/restclient/versions/HEAD/show" target="_blank">Rest Spark library</a>.<br/><br/> 

We are going to ask to Twitter to get @damko's latest tweets. We expect to get in return an array containing tweets and other related informations.
<br/>Let's see how to use it and what's the result.
</p>
<h3>The code</h3>
<?php $filename = 'application/controllers/ex_rest_client.php'; ?>
This is the code contained in the controller file <?php echo $filename;?>:
<p>
<?php 
	highlight_file($filename);
?>
</p>
[<a href="<?php echo site_url(''); ?>">Home</a>]
<h3>The result</h3>
<?php 
echo '<pre>';
print_r($tweets);
echo '</pre>';
?>
[<a href="<?php echo site_url(''); ?>">Home</a>]
</body>
</html>
