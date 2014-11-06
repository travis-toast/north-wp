<!-- Basic loop -->

<?php
   if(have_posts()) : 
      while(have_posts()) : 
         the_post(); 
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>
      
<?php
      endwhile;
   else : 
?>

      Oops, there are no posts.

<?php
   endif;
?>








<!-- THE SAME LOOP USING WP_QUERY -->

<!-- http://www.smashingmagazine.com/2013/01/14/using-wp_query-wordpress/ -->
<!-- Look up all the parameters here http://codex.wordpress.org/Class_Reference/WP_Query#Filters -->


<?php

	
	//define the arguements
   $args = array('cat' => 4);

   //associate those arguement in
   $category_posts = new WP_Query($args);


   //do the loop
   if($category_posts->have_posts()) : 
      while($category_posts->have_posts()) : 
         $category_posts->the_post();
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>      
      
<?php
      endwhile;
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
?>