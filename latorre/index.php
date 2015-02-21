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
        <title>Villa La Torre in Nerja, Costa del Sol, Spain</title>
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
			var num_photos = 15;
		</script>

		<script src="../js/main.js"></script>
    </head>
    <body>
    	<?php include("../common/header.php"); ?>

        <div class="container">
            <section class="row">
            	<div class="col-md-6">
            		<h1>
            			<?php echo $header[$l]; ?>
            		</h1>
            		<ul class="bxslider">
					</ul>
					<h2><?php echo $prop_desc[$l]; ?></h2>
            		<p class="desc"><?php echo $prop_desc_det[$l]; ?></p>
					<p class="acenter">
						<?php echo $also_anounced[$l]; ?>
					</p>
					<ul class="announces acenter">
            			<li>
            				<a href="http://www.homeaway.es/p484671?refid=property_link&catid=484671">
            					<img src="../img/homeaway.png" class="homeaway">
            				</a>
            			</li>
            			<li>
            				<a href="http://www.ownersdirect.co.uk/accommodation/p8045197#property-description">
            					<img src="../img/ownersdirect.png" class="ownersdirect">
            				</a>
            			</li>
            			<li>
            				<a href="https://www.facebook.com/pages/Villa-La-Torre/797972976937424">
            					<img src="../img/facebook.png" class="facebook">
            				</a>
            			</li>
            		</ul>

            	</div>
            	<div class="col-md-6">


            		<div role="tabpanel">
					  <ul class="nav nav-tabs" role="tablist" id="tabMenu">
					    <li role="presentation" class="active">
					    	<a href="#Accommodation" aria-controls="Accommodation" role="tab" data-toggle="tab">
					    		<span><?php echo $menu_detail[$l]; ?></span>
					    	</a>
					    </li>
					    <li role="presentation">
					    	<a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">
					    		<span><?php echo $menu_reviews[$l]; ?></span>
					    	</a>
					    </li>
					    <li role="presentation">
					    	<a href="#availability" aria-controls="availability" role="tab" data-toggle="tab">
					    		<span><?php echo $menu_avail[$l]; ?></span>
					    	</a>
					    </li>
					    <li role="presentation">
					    	<a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">
					    		<span><?php echo $menu_contact[$l]; ?></span>
					    	</a>
					    </li>
					    <li role="presentation">
					    	<a href="#location" aria-controls="location" role="tab" data-toggle="tab">
					    		<span><?php echo $menu_loc[$l]; ?></span>
					    	</a>
					    </li>
					  </ul>

					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="Accommodation">
					    	<table class="table table-striped">
						      <tbody>
						        <tr>
						          <th scope="row"><?php echo $bedrooms[$l]; ?></th>
						          <td><?php echo $bedrooms_det[$l]; ?></td>
						        </tr>
						        <tr>
						          <th scope="row"><?php echo $bathroom[$l]; ?></th>
						          <td><?php echo $bathroom_det[$l]; ?></td>
						        </tr>
						        <tr>
						          <th scope="row"><?php echo $kitchen[$l]; ?></th>
						          <td><?php echo $kitchen_det[$l]; ?></td>
						        </tr>
						        <tr>
						          <th scope="row"><?php echo $liv_room[$l]; ?></th>
						          <td><?php echo $liv_room_det[$l]; ?></td>
						        </tr>
						        <tr>
						          <th scope="row"><?php echo $other[$l]; ?></th>
						          <td><?php echo $other_det[$l]; ?></td>
						        </tr>
						        <tr>
						          <th scope="row"><?php echo $cleaning[$l]; ?></th>
						          <td><?php echo $cleaning_det[$l]; ?></td>
						        </tr>
						        <tr>
						          <th scope="row"><?php echo $facilities[$l]; ?></th>
						          <td><?php echo $facilities_det[$l]; ?></td>
						        </tr>
						      </tbody>
						    </table>

					    </div>
					    <div role="tabpanel" class="tab-pane" id="location">
					    	<a
					    		href="https://www.google.com/maps/d/viewer?ll=36.745427,-3.902249&t=h&ie=UTF8&msa=0&spn=0.002033,0.003433&z=18&hl=es&mid=ztbfN8FcwyKs.kcAE7rrVY5uk"
					    		target="_blank"
					    	>
					    		<img src="https://maps.googleapis.com/maps/api/staticmap?center=36.744243,-3.902435&zoom=17&size=500x400&maptype=satellite&markers=color:blue%7C36.745191,-3.902487">
							</a>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="reviews">
							<p><?php echo $more_reviews[$l]; ?></p>
							<div
								class="fb-comments"
								data-href="https://www.facebook.com/pages/Villa-La-Torre/797972976937424"
								data-numposts="7"
     							data-width="100%"
								data-colorscheme="light">
							</div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="availability">
					    	<?php include("calendar.php"); ?>

					    	<p class="acenter mt1">
					    		<?php echo $availability_txt1[$l]; ?>
					    	</p>

							<h4 class="acenter"><?php echo $availability_txt2[$l]; ?></h4>
					    	<p>
					    		<?php echo $availability_txt3[$l]; ?>
					    	</p>

					    </div>
					    <div role="tabpanel" class="tab-pane" id="contact">
					    	<p><?php echo $form_intro[$l]; ?></p>
					    	<ul>
						    	<li><img src="../img/phone.png"><a href="tel:0034-655-087-577">+34 655 087 577</a></li>
						    	<li><img src="../img/mail.png"><a href="mailto:nerja@gmx.es">nerja@gmx.es</a></li>
						    	<li><img src="../img/skype.png"><a href="callto://ner_ja/">ner_ja</a></li>
						    </ul>
						  	<h4><?php echo $form_title[$l]; ?></h4>
						    <form action="?l=<?php echo $l; ?>"method="POST">
						    	<p>
							    	<label>
							    		<span><?php echo $form_name[$l]; ?></span>
							    		<input type="text" name="name" placeholder="<?php echo $form_your_name[$l]; ?>" required>
							    	</label>
							    </p>
							    <p>
							    	<label>
							    		<span><?php echo $form_email[$l]; ?></span>
							    		<input type="email" name="email" placeholder="<?php echo $form_your_email[$l]; ?>" required>
							    	</label>
							    </p>
						    	<p>
							    	<label>
							    		<span><?php echo $form_subject[$l]; ?></span>
							    		<input type="text" name="subject" value="Villa La Torre">
							    	</label>
							    </p>
							    <p id="who" class="clearfix">
							    	<strong class="block"><?php echo $form_who[$l]; ?></strong>
							    	<label>
							    		<?php echo $form_adults[$l]; ?><br>
							    		<select name="adults">
							    			<?php print_options(1,6); ?>
							    		</select>
							    	</label>
							    	<label>
							    		<?php echo $form_children[$l]; ?><br>
							    		<select name="children" id="children">
							    			<?php print_options(0,5); ?>
							    		</select>
							    	</label>
							    	<label>
							    		<?php echo $form_infants[$l]; ?><br>
							    		<select name="infants">
							    			<?php print_options(0,5); ?>
							    		</select>
							    	</label>
							    </p>
							    <div id="child-ages">
							    	<ul>
							    		<li data-child="1">
							    			<label>
							    				<?php echo $form_age1[$l]; ?>
							    				<select name="child1">
							    					<option value="-1"><?php echo $form_select_age[$l]; ?></option>
							    					<?php print_options(17,2); ?>
									    		</select>
							    			</label>
							    		</li>
							    		<li data-child="2">
							    			<label>
							    				<?php echo $form_age2[$l]; ?>
							    				<select name="child2">
							    					<option value="-1"><?php echo $form_select_age[$l]; ?></option>
							    					<?php print_options(17,2); ?>
									    		</select>
							    			</label>
							    		</li>
							    		<li data-child="3">
							    			<label>
							    				<?php echo $form_age3[$l]; ?>
							    				<select name="child3">
							    					<option value="-1"><?php echo $form_select_age[$l]; ?></option>
							    					<?php print_options(17,2); ?>
									    		</select>
							    			</label>
							    		</li>
							    		<li data-child="4">
							    			<label>
							    				<?php echo $form_age4[$l]; ?>
							    				<select name="child4">
							    					<option value="-1"><?php echo $form_select_age[$l]; ?></option>
							    					<?php print_options(17,2); ?>
									    		</select>
							    			</label>
							    		</li>
							    		<li data-child="5">
							    			<label>
							    				<?php echo $form_age5[$l]; ?>
							    				<select name="child5">
							    					<option value="-1"><?php echo $form_select_age[$l]; ?></option>
							    					<?php print_options(17,2); ?>
									    		</select>
							    			</label>
							    		</li>

							    	</ul>
							    </div>
						    	<p>
							    	<label>
							    		<?php echo $form_body[$l]; ?><br>
							    		<textarea name="body"></textarea>
							    	</label>
						    	</p>

						    	<input type="submit" value="<?php echo $form_submit[$l]; ?>" class="btn btn-warning">

						    	<?php
						        if (array_key_exists('body', $_POST))
									  {

											send_mail($_POST);
                    }

						      ?>

						    </form>
					    </div>

					  </div>

					</div>

            	</div>
            </section>
        </div>



        <footer class="container">
            <section class="row">
            	<div class="col-md-12">
            		<h3 class="acenter"><?php echo $check_others[$l]; ?></h3>
            	</div>
            	<div class="col-md-12">
            		<ul id="others" class="clearfix">
            			<li>
										<a href="<?php echo $basedir;?>lavega/?l=<?php echo $l; ?>">
	        						<img src="<?php echo $basedir;?>lavega/photos/pic1.jpg" />
	        					</a>
	        					Villa La Vega
            			</li>

            			<li>
										<a href="<?php echo $basedir;?>/Playa/index.htm">
											<img src="<?php echo $basedir;?>/laplaya/photos/pic1.jpg" />
										</a>
        						La Playa Apartament
            			</li>
            			<li>
										<a href="<?php echo $basedir;?>/nueva/fotos%20del%20piso.htm">
											<img src="<?php echo $basedir;?>/centric/photos/pic1.jpg" />
										</a>
										Centric apartament
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
