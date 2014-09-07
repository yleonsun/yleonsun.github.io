<section class="sidebar">
	<!-- Sidebar Widgets Area -->
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->
		<p>
			<?php _e("Please activate some Widgets.", "site5framework"); ?>

			<?php if(current_user_can('edit_theme_options')) : ?>
			<a href="<?php echo admin_url('widgets.php')?>" class="add-widget"><?php _e("Add Widget", "site5framework"); ?></a>
			<?php endif ?>
		</p>
	<?php endif; ?>
	<!-- END Sidebar Widgets Area -->
</section> <!-- Sidebar -->