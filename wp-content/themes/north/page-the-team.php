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






	<?php $my_query = new WP_Query('page_id=16');
	while ($my_query->have_posts()) : $my_query->the_post();
	$do_not_duplicate = $post->ID;?>
	
	<header class="pageheader fadeinfromside">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="subtitle"><?php the_field('subtitle'); ?></span>
	</header>


	<div class="wrapper">
		<div class="row">
<!--
			<div class="collage">
				<div class="cols7">
					<img src="http://placehold.it/395x450" />
				</div>
				<div class="cols9">
					<img src="http://placehold.it/700x300" style="margin-bottom: 3%;"/>

					<img src="http://placehold.it/700x300" />
				</div>
			</div>
-->

			<?php
			if(get_field('title_image'))
			{
				echo '<img class="title_image preload" src="' . get_field('title_image') . '" />';
			}
			
			?>
		</div>

		<div class="row">
			<div class="cols7">
				<p class="lead">
					<?php the_field('quote'); ?>
				</p>
				<img class="company_logo" src="<?php the_field('company_logo'); ?>" />

			</div>
			<div class="cols9">
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
		<div class="row">

			<?php
			if(get_field('title_image'))
			{
				echo '<img class="title_image" src="' . get_field('title_image') . '" />';
			}
			
			?>
		</div>

		<div class="row">
			<div class="cols7">
				<p class="lead">
					<?php the_field('quote'); ?>
				</p>
				<img class="company_logo" src="<?php the_field('company_logo'); ?>" />
			</div>
			<div class="cols9">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	 <?php endwhile; ?>




<?php get_footer(); ?>
