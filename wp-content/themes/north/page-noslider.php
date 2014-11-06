<?php
/*
Template Name: Page without Slider
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			

	<header class="pageheader fadeinfromside pushdown">
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
			<div class="plain-txt">
				<?php the_content(); ?>
			</div>
		</div>
	</div>




	<?php endwhile; endif; ?>

<?php get_footer(); ?>
