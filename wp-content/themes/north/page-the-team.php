<?php get_header(); ?>




			

	<?php if( have_rows('slideshow') ): ?>
		<div class="page-slider">
			<ul class="slides page-slides">
		
			<?php while( have_rows('slideshow') ): the_row(); 
				$link = get_sub_field('slide_image');
		
				?>
				<?php if( $link ): ?>
					<li class="page-slide" style="background-image:url(<?php echo $link; ?>)">
				<?php endif; ?>
		
					</li>
		
			<?php endwhile; ?>
		
			</ul>
		</div>
	
	<?php endif; ?>



<!--                 	<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/logo-smll.png" alt="Lane Cover - North - By St Malo" width="189" height="104" class="nav-logo"/> -->


	<?php $my_query = new WP_Query('page_id=16');
	while ($my_query->have_posts()) : $my_query->the_post();
	$do_not_duplicate = $post->ID;?>
	
	<header class="pageheader fadeinfromside">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="subtitle"><?php the_field('subtitle'); ?></span>
	</header>


	<div class="wrapper">
		<div class="row collage fadeinfromside">
			<div class="sider">

				<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/team/bathroom.jpg" alt="bathroom" width="467" height="638" />

			</div>
			<div class="sider">
				
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/team/kitchen.jpg" alt="kitchen" width="468" height="309""" />
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/team/pool.jpg" alt="pool" width="468" height="309" />

			</div>
		</div>
		<div class="row fadeinfromside video-wrap-row">
	
			<div class="video-wrap">
				<video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
				  controls preload="auto" width="860" height="482"
				  poster="<?php echo get_template_directory_uri(); ?>/_assets/videos/stmalo-team.png"
				  data-setup='{"example_option":true}'>
					 <source src="<?php echo get_template_directory_uri(); ?>/_assets/videos/stmalo-team.mp4" type='video/mp4' />
					 <source src="<?php echo get_template_directory_uri(); ?>/_assets/videos/stmalo-team.webm" type='video/webm' />
					 <source src="<?php echo get_template_directory_uri(); ?>/_assets/videos/stmalo-team.ogv" type='video/ogg' />
	
	
					 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
				</video>
			</div>

		</div>

		<div class="row">
			<div class="cols8">
				<p class="lead">
					<?php the_field('quote'); ?>
				</p>
				<img class="company_logo" src="<?php the_field('company_logo'); ?>" />

			</div>
			<div class="cols8">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	 <?php endwhile; ?>
	 
	 
	<div class="wrapper">
		<div class="row">
			 <hr>
		 </div>
	 </div>
			 
			 

	<?php $my_query = new WP_Query('page_id=41');
	while ($my_query->have_posts()) : $my_query->the_post();
	$do_not_duplicate = $post->ID;?>
	
	<header class="pageheader">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="subtitle"><?php the_field('subtitle'); ?></span>
	</header>


	<div class="wrapper">
		<div class="row collage fadeinfromside">

			<div class="sider">


				<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/team/building.jpg" alt="building" width="467" height="638" />

			</div>
			<div class="sider">
				
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/team/cross.jpg" alt="cross" width="468" height="309" style="margin-bottom: 4.5%;" />
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/team/city.jpg" alt="city" width="468" height="309" />

			</div>
		</div>

		<div class="row">
			<div class="cols8">
				<p class="lead">
					<?php the_field('quote'); ?>
				</p>
				<img class="company_logo" src="<?php the_field('company_logo'); ?>" />
			</div>
			<div class="cols8">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	 <?php endwhile; ?>




<?php get_footer(); ?>
