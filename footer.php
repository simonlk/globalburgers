		</div>
		</div><!-- End Main row -->
		<footer id="content-info" role="contentinfo">
			<div class="row">
				<div class="twelve columns copyright">
					&copy; <?php echo date('Y'); ?> Global Burgers. All Rights Reserved.
				</div>
			</div>			
			<div class="row">
				<?php wp_nav_menu('menu=Footer Menu&after=<span>/</span>'); ?>
			</div>			
			<div class="row renegade">
				<div class="twelve columns">
					Website by <a href="http://www.renegade-empire.com?ref=gb" target="_blank" title="Creative Design &amp; Web Development">Renegade Empire</a>
				</div>
			</div>
		</footer>
			
	</div><!-- Container End -->
	
	<!-- Included JS Files of Foundation -->
	
	<!-- If jQuery already load, remove the line -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.reveal.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.orbit-1.4.0.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.customforms.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.placeholder.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tooltips.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
</body>
</html>