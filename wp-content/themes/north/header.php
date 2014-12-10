<!DOCTYPE html>
<!--[if lt IE 9 ]>	<html class="no-js ltie9 lang="en">	<![endif]-->
<!--[if IE 9 ]>		<html class="no-js ie9"  lang="en">	<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en">	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>
			   <?php
			      if (function_exists('is_tag') && is_tag()) {
			         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			      elseif (is_archive()) {
			         wp_title(''); echo ' Archive - '; }
			      elseif (is_search()) {
			         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			      elseif (!(is_404()) && (is_single()) || (is_page())) {
			         wp_title(''); echo ' - '; }
			      elseif (is_404()) {
			         echo 'Not Found - '; }
			      if (is_home()) {
			         bloginfo('name'); echo ' - '; bloginfo('description'); }
			      else {
			          bloginfo('name'); }
			      if ($paged>1) {
			         echo ' - page '. $paged; }
			   ?>
		</title>
		<meta name="description" content="Brand new Designer apartments in Lane Cove from $495,000">

		<!-- Open Graph data -->
		<meta property="og:title" content="Lane Cove North By St Malo" />
		<meta property="og:type" content="Lane Cove North By St Malo" />
		<meta property="og:url" content="http://northlanecove.com.au" />
		<meta property="og:description" content="Brand new Designer apartments in Lane Cove from $495,000" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<?php if (is_search()) { ?>
		   <meta name="robots" content="noindex, nofollow" /> 
		<?php } ?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_assets/styles/css/global.min.css">
		<script src="<?php echo get_template_directory_uri(); ?>/_assets/scripts/modernizr.custom.70885.js"></script>
		<!--[if lt IE 9]>
			<script src="_assets/scripts/css3-mediaqueries.js"></script>
			<script src="_assets/scripts/selectivizr-min.js"></script>
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	

        <link rel="icon" type="image/png" href="<?php echo esc_url( home_url( '/' ) ); ?>/favicon-32x32.png" sizes="32x32">


		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 9]>
		<p class="warning ie-warn"><span>You're using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true" target="_blank">activate Google Chrome Frame</a> to improve your experience.</span></p>
		<![endif]-->
		<p class="warning nojs-warn"><span>This website requires Javascript for optimum viewing purposes. Please <a href="http://enable-javascript.com" target="_blank">enable javascript</a> in your browser.</span></p>



		

        <div class="main-cont-wrap">
            <div class="main-cont" id="main-cont">
				<?php include (TEMPLATEPATH . '/_modules/register.php' ); ?>


				<?php if ( is_front_page()) { ?>
					<?php include (TEMPLATEPATH . '/_modules/splash.php' ); ?>
				<?php } ?>


				<div class="body" id="bodytop">
					<div class="main">



						<nav class="mbl-nav" id="mbl-nav">

							<?php
							
							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Left menu',
								'container'       => 'false',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'tp-left',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							
							wp_nav_menu( $defaults );
							
							?>
							<?php
							
							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Right menu',
								'container'       => 'false',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'tp-right',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);
							
							wp_nav_menu( $defaults );
							
							?>

						</nav>



						<?php if ( is_front_page()) { ?>
						<header class="top-header">

						<?php } else {?>
						<header class="top-header full-stick">

						<?php } ?>


				        	<nav class="top-menu">
								<a class="mbl-navopen" id="mbl-navopen">
									<em></em><em></em><em></em>
								</a>
				
				
								<?php
								
								$defaults = array(
									'theme_location'  => '',
									'menu'            => 'Left menu',
									'container'       => 'false',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'tp-left',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								);
								
								wp_nav_menu( $defaults );
								
								?>
				
				                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-wrapper">
				                	<img src="<?php echo get_template_directory_uri(); ?>/_assets/images/logo-smll.png" alt="Lane Cover - North - By St Malo" width="189" height="104" class="nav-logo"/>
				                    <span class="symbol nav-symbol"></span>
				                </a>		
				
								<?php
								
								$defaults = array(
									'theme_location'  => '',
									'menu'            => 'Right menu',
									'container'       => 'false',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'tp-right',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								);
								
								wp_nav_menu( $defaults );
								
								?>
				
				
				
								<a href="#regis-cont" class="mbl-register scrollto open-regis">Register</a>
				            </nav>
						</header>
