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
			<?php echo $also_anounced_images[$l]; ?>

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
						<a href="#price" aria-controls="price" role="tab" data-toggle="tab">
							<span><?php echo $menu_price[$l]; ?></span>
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
						href="<?php echo $map_link; ?>"
						target="_blank"
						>
						<img src="<?php echo $map_img; ?>">
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
			<div role="tabpanel" class="tab-pane" id="price">
				<table id="calendar" class="table table-bordered table-hover table-condensed table-striped">
					<tr>
						<th class="text-center"><?php echo $prices_col1[$l]; ?></th>
						<th class="text-center"><?php echo $prices_col2[$l]; ?></th>
						<th class="text-center"><?php echo $prices_col3[$l]; ?></th>
					</tr>
				</table>
				<p class="mt1"><?php echo $prices_text_1[$l]; ?></p>
				<p><?php echo $prices_text_2[$l]; ?></p>
			</div>
			<div role="tabpanel" class="tab-pane" id="availability">
				<?php include("calendar.php"); ?>

				<p class="acenter mt1">
					<?php echo $availability_txt1[$l]; ?>
				</p>

				<!--<h4 class="acenter"><?php echo $availability_txt2[$l]; ?></h4>
				<p>
					<?php echo $availability_txt3[$l]; ?>
					</p>-->

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
							<input type="text" name="subject" value="<?php echo $form_value[$l]; ?>">
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