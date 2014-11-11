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


	<?php if ( is_page(10) ) { ?>
		<div class="map">
			<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/map.jpg" alt="Map" />
		</div>
	<?php } else {?>


	<?php } ?>


	







	<header class="pageheader fadeinfromside">
		<h1 class="title"><?php the_title(); ?></h1>
		<span class="subtitle"><?php the_field('subtitle'); ?></span>
	</header>


	<div class="wrapper">
		<div class="row">

			<?php
			if(get_field('title_image'))
			{
				echo '<img src="' . get_field('title_image') . '" />';
			}
			
			?>
		</div>

		<div class="row fadeinfromside">
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
	
	<div class="row">
		<div class="tiles-section">








		<?php
		    $args = array(
		      'post_type' => 'hotspot',
		    );
		    $hotspot = new WP_Query( $args );
		    if( $hotspot->have_posts() ) {
		      while( $hotspot->have_posts() ) {
		        $hotspot->the_post();
		        ?>



				<div class="tile-wrap">


					<?php if(get_field('intro_quote'))
					{
						echo '<blockquote class="tile-quote">' . get_field('intro_quote') . '</blockquote>';
					}
					
					?>


					<?php if( get_field('stand_out') ) {?>
					<article class="tile bronze">

					<?php } else {?>
					<article class="tile">
					<?php } ?>

						<?php the_post_thumbnail( 'hotspot-thumb' );  ?>
						<div class="ttl"><h2><?php the_title() ?></h2></div>
						<?php the_field('description'); ?>
						<address>
							<?php the_field('address'); ?>
						</address>
					</article>

					<?php
					
					if(get_field('pull_out_quote'))
					{
						echo '<blockquote class="tile-quote">' . get_field('pull_out_quote') . '</blockquote>';
					}
					
					?>
				</div>



		        <?php
		      }
		    }
		    else {
		    }
		  ?>
  
  
		</div>

	</div>




	<?php endwhile; endif; ?>

<?php get_footer(); ?>
