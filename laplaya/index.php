<?php
include("string.php");
include("../scripts/utils.php");

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
  <title>Beachfront Apartment in Nerja, Costa del Sol, Spain</title>
  <meta name="description" content="Villa in Nerja situated at sea level, with a beautiful beach just 100 metres away. We have a private pool and sea views">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="/favicon.ico">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600|Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link href="../css/main.css" rel="stylesheet" />
  <link href="../css/jquery.bxslider.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="../js/jquery.fitvids.js"></script>
  <script src="../js/mobile-detect.min.js"></script>
  <script src="../js/jquery.bxslider.min.js"></script>
  <script type="text/javascript">
    <?php include("../common/header_scripts.php"); ?>
  </script>

  <script src="../js/main.js"></script>
</head>
<body>
  <?php include("../common/header.php"); ?>
  <?php include("../common/body.php"); ?>

  <footer class="container">
    <section class="row">
      <div class="col-md-12">
        <h3 class="acenter"><?php echo $check_others[$l]; ?></h3>
      </div>
      <div class="col-md-12">
        <ul id="others" class="clearfix">
          <li>
            <a href="<?php echo $basedir;?>latorre/?l=<?php echo $l; ?>">
              <img src="<?php echo $basedir;?>latorre/photos/desktop_710/pic1.jpg" />
            </a>
            <?php echo $latorre[$l]; ?>
          </li>
          <li>
            <a href="<?php echo $basedir;?>lavega/?l=<?php echo $l; ?>">
              <img src="<?php echo $basedir;?>lavega/photos/desktop_710/pic1.jpg" />
            </a>
            <?php echo $lavega[$l]; ?>
          </li>

          <li>
            <a href="<?php echo $basedir;?>centro/?l=<?php echo $l; ?>">
              <img src="<?php echo $basedir;?>centro/photos/desktop_710/pic1.jpg" />
            </a>
            <?php echo $elcentro[$l]; ?>
          </li>

        </ul>
      </div>
    </section>
  </footer>



  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script type="text/javascript">
    $(document).ready(function(){
      <?php
      if (array_key_exists('subject', $_POST)){
        echo "$('a[href=\"#contact\"]').tab('show');";
      }
      ?>
    });
  </script>

</body>
</html>
