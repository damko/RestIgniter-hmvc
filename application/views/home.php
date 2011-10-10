<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>RestIgniter</title>

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

h2 {
	background-color: transparent;
	font-size: 20px;
	font-weight: bold;
	margin: 0px;
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

div#container {
	float: left;
	width: 100%;
	background: #FFF;
}

div#right{
	float:right;
	display:inline;
	width:400px;
    /* border: 1px solid #CCC; */
    margin:5px;
    margin-top: 0px;
    background: #FFF;
} 

div#left{
    margin-top: 12px;
    background: #FFF;
} 
</style>
</head>
<body>

<h1>RestIgniter</h1>

<div id="container">
<p>
Rest Igniter is <a href="http://codeigniter.com/" target="_blank">Code Igniter</a> (stable version 2.0.3) plus <a href="http://getsparks.org" target="_blank">Sparks</a> and Rest support. 
<b>In addiction, its aim is to allow an easy share of php objects over REST.</b>
</p>
    <div id="right">
    	<h2>References</h2>
    	<ul>
    		<li><a href="https://github.com/damko/RestIgniter" target="_blank">Project Page</a></li>
    		<li><a href="http://ri.squadrainformatica.com" target="_blank">Live Demo</a></li>
    		<li><a href="<?php echo site_url('home/documentation'); ?>">Documentation</a></li>
    	</ul>

    	<h2>Examples</h2>
    	<ul>
    		<li><a href="<?php echo site_url('ex_rest_client'); ?>">Usage as a rest client</a></li>
    		<li><a href="<?php echo site_url('ex_rest_client2'); ?>">Usage as a rest server</a></li>
    		<li><a href="<?php echo site_url('ex_expose'); ?>">Exposing an object</a></li>
    	</ul>
    	
    	<h2>Add-ons</h2>
    	<ul>
    		<li><a href="">ri_ldap</a>: an easy spark library to operate with ldap</li>
    		<li><a href="">ri_contact_engine</a>: a spark library to handle People Organizations and Locations</li>
    	</ul>
    	
    	<h2>Applications using R.I.</h2>
    	<ul>
    		<li><a href="">MCB-SB</a>: an invoice manager for small businesses based on <a href="http://www.myclientbase.com" target="_blank">MCB</a></li>
    	</ul>    	 	    	    	 	
    </div>
    <div id="left"><img src="images/restigniter.png"></div>
</div> 
</body>
</html>
