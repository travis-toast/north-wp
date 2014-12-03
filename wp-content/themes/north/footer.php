


	<?php if ( is_front_page()) { ?>
	<?php } else {?>
		<?php include (TEMPLATEPATH . '/_modules/footerlinks.php' ); ?>
	<?php } ?>


	<div class="wrapper">
		<div class="row">
        	<footer class="bottom-footer">	
				<div class="marks">
                    <span>&copy; St Malo Properties 2014</span>
                    <span>ABN: 8316 21091</span>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>disclaimer">Disclaimer</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy">Privacy</a></li>
                    </ul>
                    <a href="http://www.toastcreative.com.au" target="_blank" class="toast-credit">Designed by <strong>Toast Creative</strong></a>
                </div>
                <div class="moreinfo">
                	<address>
                    	<a href="tel">
	                    	1800 131 905
	                    	<span>Display Suite Now Open</span>
                    	</a>
<!--
                        <em>536-542 Mowbray road</em>
                         <em>Lane Cove, Sydney NSW</em>
-->
                    </address>
					<div class="sponsr">
                        <a href="http://stmalo.com.au/" target="_blank" class="sponsr-stm"></a>
                        <a href="http://www.savills.com.au/" target="_blank" class="sponsr-svaills"></a>
                    </div>
                    <div class="symbol bronze smll"></div>
                </div>
            </footer>
        </div>
	</div>






					</div><!-- /main -->
				</div><!-- /body -->
            </div><!-- /main-cont -->
        </div><!-- /main-cont-wrap -->		




	<?php wp_footer(); ?>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/_assets/scripts/jquery.min.js"><\/script>')</script>

	<script src="<?php echo get_template_directory_uri(); ?>/_assets/scripts/plugins.min.js"></script>

	<script>

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-4805518-77']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
	</script>


</body>

</html>
