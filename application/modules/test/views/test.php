<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Test CI2 + HMVC + Sparks</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		margin-top: 50px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
[view test.php]
	<h1>Test CI2 + HMVC + Sparks</h1>

	<div id="body">
		<p>Does <a href="http://www.codeigniter.com"  target="_blank">Code Igniter 2</a> work with <a href="http://getsparks.org" target="_blank">Sparks</a> and <a href="https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/wiki/Home"  target="_blank">HMVC</a> installed at the same time?</p>

		<p>This is the installation <a href="http://getsparks.org/set-up-mx" target="_blank">guide</a> to follow to make it working</p>
		<p>Unfortunately it doesn't work as supposed, that's why this project exists.</p><br/>
		
		<h3>This page is to test a controller loaded as CI_Controller Extension (so the view is set into application/views/test.php)</h3><br/>
		
		<p><b>Testing HMVC</b>: if you can read this page than it means that HMVC is working</p><br/>
		
		<p><b>Testing Sparks</b>: if you can see the RFC 1558 below the line than it's working.</p>
		<b>NOTE:</b>
		<p>If you want to run these test with a controller loaded as MX_Controller Extension click <a href="<?php echo site_url('test/test2'); ?>">here</a></b></p><hr/>
		
		<pre><?php print_r($dump); ?></pre>
		<hr/>
		
		
	</div>
</div>

</body>
</html>