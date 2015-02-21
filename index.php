<?php
	include("string.php");
	include("scripts/utils.php");
	
	$l = get_lang();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Holidays in Nerja, Costa del Sol, Spain</title>
        <meta name="description" content="Interactive guide and properties situated at sea level, with a beautiful beach just 100 metres away, private pool and sea views">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="/favicon.ico">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">		
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600|Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link href="css/main.css" rel="stylesheet" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="js/mobile-detect.min.js"></script>
		<style type="text/css">
			.home h1{
				font-size: 3em;
				margin-top: 3.5em;
			}
			.home p{
				font-size: 2em;
				margin-bottom: 2em;
			}
			.home .btn{
				font-size: 2em;
			}
			section.header{
				margin-top: 2em;
			}
			iframe{
				border-top: 30px solid #000;
				position: absolute;
				margin-top: 2em;
			}
			#properties ul{
				list-style: none;
				padding: 0;
				margin-top: 2em;
			}
			#properties li {
				width: 47%;
				margin-right: 6%;
				float: left;
				text-align: center;
			}
			#properties li:nth-child(even){
				margin-right: 0;
			}
			#properties li img{
				width: 100%;
			}
			#video{
				width: 100%;
				height: 300px;
				margin: 1em auto 0;
			}
			body{
				margin-bottom: 0;
			}
			@media only screen and (max-width: 992px) {
				.home h1{
					margin-top: 0;
					font-size: 1.5em;
				}
				.home p,h2{
					font-size: 1em;	
				}
				.home .btn{
					font-size: 1em;		
				}
				#properties li{
					margin-bottom: 1em;
				}
				#properties li a{
					display: inline-block;
					margin: 0 0 10px;
				}

			}
		</style>
		<script src="js/main.js"></script>
    </head>
    <body>
        <?php include("common/header.html"); ?>

        <div class="container">
            <section class="row header">
            	<div class="col-md-6 acenter home">
            		<h1><?php echo $header_h1[$l]; ?></h1>
            		
            		<p><?php echo $claim[$l]; ?></p>
            		<a class="btn btn-lg btn-warning" href="#guide"><?php echo $btn[$l]; ?></a>
            		
            	</div>
            	<div class="col-md-6" id="properties">
            		<h2><?php echo $properties[$l]; ?></h2>
            		<ul class="clearfix">
            			<li>
        					<a href="latorre/?l=<?php echo $l; ?>">
        						<img src="latorre/photos/pic1.jpg" />
        					</a>
        					Villa La Torre
            			</li>
            			<li>
        					<a href="lavega/?l=<?php echo $l; ?>">
        						<img src="lavega/photos/pic1.jpg" />
        					</a>
        					Villa La Vega
            			</li>
            			<li>
        					<a href="Playa/index.htm">
        						<img src="laplaya/photos/pic1.jpg" />
        					</a>
        					La playa apartment
            			</li>
            			<li>
        					<a href="nueva/fotos%20del%20piso.htm">
        						<img src="centric/photos/pic1.jpg" />
        					</a>
        					Centric apartment
            			</li>
            		</ul>
            	</div>
            </section>
        </div>                
        <iframe id="guide" width="100%" height="550px" src="http://hhkaos2.maps.arcgis.com/apps/MapJournal/index.html?appid=e2fb6e3d480f4247a6295eee676db358" frameborder="0" scrolling="no"></iframe>
    </body>
</html>
