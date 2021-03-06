<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p><?php echo (get_option('footer_text')); ?></p>
			</div>
			<div class="col-md-6">
				<ul class="social-links">
					<li><?php _e('Me on the web:', 'dia') ?></li>
					<?php wp_nav_menu( 
					array (
						'menu' => 'social-menu',
						'theme_location' => 'social-menu',
						'container' => false,
						'items_wrap' =>'%3$s',
						'fallback_cb' => false
						)
					); ?>
				  </ul>
			</div>
		</div>
	</div>
</footer>

<!-- Search Modal -->
<div class="modal fade" id="search-modal" role="dialog" tabindex="-1" data-backdrop="static">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="close-icon"></i></button>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<h4><?php _e('Search', 'dia') ?></h4>
			<form method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input text="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" type="text" placeholder="<?php _e('What are you looking for?', 'dia') ?>">
			</form>
		</div>
	</div>
</div>

<!-- Menu Modal -->
<div class="modal fade" id="menu-modal" role="dialog" tabindex="-1" data-backdrop="static">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="close-icon"></i></button>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<h5 class="text-muted"><?php _e('Menu', 'dia') ?></h5>
			<?php wp_nav_menu( 
			array (
				'menu' => 'top-menu',
				'theme_location' => 'top-menu',
				'menu_class' => 'menu-list',
				'container' => false,
				'fallback_cb' => false
				)
			); ?>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>