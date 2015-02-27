<!DOCTYPE HTML>
<html>
<head>
    <title>pannellum embed example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
    	body{margin: 0;}
    </style>
</head>
<body>
    <iframe 
    	title="pannellum panorama viewer" 
    	webkitAllowFullScreen mozallowfullscreen 
    	allowFullScreen 
    	style="border-style:none;width:467px;height:301px" 
    	src="src/pannellum.htm?tour=../pic<?php echo $_GET["id"]; ?>.json&amp;autoload=yes"
    ></iframe>
</body>
</html>
