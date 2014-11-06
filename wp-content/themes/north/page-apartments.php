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


			<?php if( have_rows('apartment_gallery') ): ?>
				<div class="apartment-slider">
					<ul class="slides page-slides">
				
					<?php while( have_rows('apartment_gallery') ): the_row(); 
						$link = get_sub_field('apartment_gallery_image');
				
						?>
						<?php if( $link ): ?>
							<li class="page-slide" style="background-image:url(<?php echo $link; ?>)">
						<?php endif; ?>
				
							</li>
				
					<?php endwhile; ?>
				
					</ul>
				</div>
			
			<?php endif; ?>



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
	</div>




	<?php endwhile; endif; ?>

<?php get_footer(); ?>
