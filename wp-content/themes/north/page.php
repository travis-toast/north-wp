<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			

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




	







	<header class="pageheader fadeinfromside">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="subtitle"><?php the_field('subtitle'); ?></span>
	</header>


	<div class="wrapper">
		<div class="row">

			<?php
			if(get_field('title_image'))
			{
				echo '<img class="title_image" alt="Apartment" src="' . get_field('title_image') . '" />';
			}
			
			?>
		</div>

		<div class="row">
			<div class="cols7">
				<p class="lead">
					<?php the_field('quote'); ?>
				</p>
			</div>
			<div class="cols9">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="cols16">
				<?php if ( is_page(10) ) { ?>
					
					<a href="https://www.google.com.au/maps/place/536%2F542+Mowbray+Rd,+Lane+Cove+North+NSW+2066/@-33.805934,151.162576,17z/data=!3m1!4b1!4m2!3m1!1s0x6b12af47e3d000ab:0x9d2af4b1a9189b2e" target="_blank" class="map-image">
						<img class="title_image" alt="Map" src="<?php echo get_template_directory_uri(); ?>/_assets/images/map.jpg" />
					</a>
			
				<?php } ?>

			</div>
		</div>



	</div>




	<?php endwhile; endif; ?>

<?php get_footer(); ?>
