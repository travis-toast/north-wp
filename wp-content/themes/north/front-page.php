<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		


	<header class="pageheader">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="subtitle"><?php the_field('subtitle'); ?></span>
	</header>
	
	
	
	<div class="wrapper">
		<div class="hp-row">

			<div class="video-wrap">
				<video class="video-js vjs-default-skin vjs-big-play-centered"
				  controls preload="auto" width="860" height="482"
				  poster="<?php echo get_template_directory_uri(); ?>/_assets/videos/north_dev_testimonial.jpg"
				  data-setup='{"example_option":true}'>
					 <source src="<?php echo get_template_directory_uri(); ?>/_assets/videos/north_dev_testimonial.mp4" type='video/mp4' />
					 <source src="<?php echo get_template_directory_uri(); ?>/_assets/videos/north_dev_testimonial.webm" type='video/webm' />
					 <source src="<?php echo get_template_directory_uri(); ?>/_assets/videos/north_dev_testimonial.ogv" type='video/ogg' />
	
	
					 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
				</video>
			</div>


		</div>
		<div class="hp-row">
			<div class="apartments-wrap">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>apartments" class="imagelink">
					<span class="cnt">
						<span class="text">
							<strong>Apartments</strong>
							<em>view section</em>
						</span>
						<i class="n-icon-clove"></i>
					</span>
					<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/lane-way.jpg" alt="Lane way"  />
				</a>					
			</div>
			<div class="locations-wrap">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>location" class="imagelink">
					<span class="cnt">
						<span class="text">
							<strong>Location</strong>
							<em>view section</em>
						</span>
						<i class="n-icon-triangle"></i>
					</span>
					<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/shopping-gallery.jpg" alt="Lane way"  />
				</a>					
			</div>
		</div>
		<div class="hp-row">
			<div class="quote-wrap">
				<p class="lead">
					<?php the_field('quote'); ?>
				</p>
			</div>
			<div class="discover-wrap">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>discover" class="imagelink">
					<span class="cnt">
						<span class="text">
							<strong>Discover</strong>
							<em>view section</em>
						</span>
						<i class="n-icon-duck"></i>
					</span>
					<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/boats.jpg" alt="Lane way"  />
				</a>					
			</div>
		</div>
		<div class="hp-row">
			<div class="register-wrap">
				<a href="#regis-cont" class="imagelink scrollto open-regis">
					<span class="cnt">
						<span class="text">
							<strong>Register</strong>
							<em>view section</em>
						</span>
						<i class="n-icon-north"></i>
					</span>
					<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/cafe.jpg" alt="Lane way" />
				</a>					
			</div>
		</div>
		<div class="hp-row">
			<div class="col-one">
				<?php the_content(); ?>
			</div>
			<div class="col-two">
				<?php the_field('2nd_column'); ?>
			</div>

		</div>
	</div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
