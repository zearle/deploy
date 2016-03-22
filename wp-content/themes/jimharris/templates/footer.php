<footer>
	<div class="container">
		<div class="row">
			<div class="social-icons">
				<a href="<?php echo get_field('facebook_url'); ?>">
					<svg class="icon facebook">
						<title>Facebook</title> 
						<use xlink:href="#facebook_icon" />
					</svg>
				</a>
				<a href="<?php echo get_field('twitter_url'); ?>">
					<svg class="icon twitter">
						<title>Twitter</title> 
						<use xlink:href="#twitter_icon" />
					</svg>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="colophon-wrapper">
				<p class="colophon"><?php echo get_field('colophon_text'); ?></p>
			</div>
		</div>
	</div>
</footer>

