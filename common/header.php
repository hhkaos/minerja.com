<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php 
  $domain = $_SERVER['HTTP_HOST'];
  if($domain == "localhost"){
    $basedir = "/minerja/";
  }else{
    $basedir = "/";
  }
  
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59536969-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=263405170475604&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
	
  <div class="container">
		<div class="row">
    		<div class="col-md-12">
    			<a href="<?php echo $basedir;?>?l=<?php echo $l; ?>"><img src="<?php echo $basedir;?>img/logo_b.png" id="logo"></a>
    		
    			<ul class="nav nav-pills pull-right">
				  <li role="presentation">
				  	<div class="dropdown">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					    <?php 
                if($l == "en"){echo "English";}
                elseif($l == "fr"){echo "Française";}
                elseif($l == "es"){echo "Español";}
              ?>
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					    <?php if($l != "es"){ ?>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="?l=es">Español</a></li>
              <?php } ?>
              <?php if($l != "en"){ ?>
					      <li role="presentation"><a role="menuitem" tabindex="-1" href="?l=en">English</a></li>
              <?php } ?>
					    <?php if($l != "fr"){ ?>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="?l=fr">Française</a></li>
              <?php } ?>
					  </ul>
					</div>

				  </li>
				</ul>
    		</div>
    	</div>
    </div>
</header>