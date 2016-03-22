<section id="Hero" class="hero">
	<div class="container">
		<div class="row">
			<div id="logo" class="logo">
				<svg class="icon">
					<title>Jim Harris for President</title> 
					<use xlink:href="#jim_harris_logo" />
				</svg>
			</div>
		</div>
		<div class="row">
			<form id="EmailForm" class="bsd-form" action="https://wideeye.bsd.net/page/s/jharris" method="POST">
			
				<div class="form-group">
					<label class="sr-only" for="Email">Email address</label>
					<input id="Email" class="form-control" type="email" name="email" placeholder="Email address" required>

				</div>
				<div class="form-group">
			    	<label class="sr-only" for="ZipCode">Zip code</label>
					<input id="ZipCode" class="form-control" type="text" name="zip" placeholder="Zip code" maxlength="5" required>
				</div>
			    <button class="btn" type="submit">Sign Up</button>
			    <div id="SuccessMessage" class="alert">
					<strong>Thank you!</strong>
				</div>
			</form>
		</div>
	</div>
</section>
<section id="GetInvolved" class="get-involved">
	<div class="container">
		<div class="row">
			<h2><?php echo get_field('get_involved_section_title'); ?></h2>
		</div>
		<div class="row tile-container">
			<div class="tile">
				<a href="<?php echo get_field('sign_up_url'); ?>">
					<div class="icon-wrapper">
						<svg class="icon icon-sign-up">
							<title>Sign Up</title> 
							<use xlink:href="#signup_icon" />
						</svg>
					</div>
					<span class="subtitle">
						<?php echo get_field('sign_up_subtitle'); ?>
					</span>
				</a>
			</div>
			<div class="tile">
				<a href="<?php echo get_field('volunteer_url'); ?>">
					<div class="icon-wrapper">
						<svg class="icon icon-volunteer">
							<title>Volunteer</title> 
							<use xlink:href="#volunteer_icon" />
						</svg>
					</div>
					<span class="subtitle">
						<?php echo get_field('volunteer_subtitle'); ?>
					</span>
				</a>
			</div>
			<div class="tile">
				<a href="<?php echo get_field('contribute_url'); ?>">
					<div class="icon-wrapper">
						<svg class="icon icon-contribute">
							<title>Contribute</title> 
							<use xlink:href="#contribute_icon" />
						</svg>
					</div>
					<span class="subtitle">
						<?php echo get_field('contribute_subtitle'); ?>
					</span>
				</a>
			</div>
		</div>
		<div class="row">
			<p class="description">
				<?php echo get_field('get_involved_section_content'); ?>
			</p>
		</div>
	</div>
</section>
<section id="ConnectNow" class="connect-now">
	<div class="container">
		<div class="row">
			<h2><?php echo get_field('connect_now_section_title'); ?></h2>
		</div>
		<div class="row">
			<p class="description"><?php echo get_field('connect_now_section_content'); ?></p>
		</div>
		<div class="row instagram-feed">
			<?php get_insta_posts(); ?>
		</div>
		<div class="row">
			<div class="btn-wrapper">
				<a class="btn btn-blue" href="<?php echo get_field('red_button_url'); ?>"><?php echo get_field('red_button_text'); ?></a>
			</div>
			<div class="btn-wrapper">
				<a class="btn btn-red" href="<?php echo get_field('blue_button_url'); ?>"><?php echo get_field('blue_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>
