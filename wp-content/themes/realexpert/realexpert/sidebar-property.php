<?php
/**
 * The template for the right sidebar
 *
 */?>
<section id="sidebar" class="<?php echo 'span'.of_get_option( 'sidebar_width' ) ?>" role="complementary">
	<?php
	if( is_active_sidebar( 'Sidebar_Property' ) ):
		dynamic_sidebar( 'Sidebar Property' );
	?>
	<?php else: ?>
		<p class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php _e('There are no sidebar widgets defined', 'realexpert') ?>
		</p>
	<?php endif; ?>
</section><!-- #sidebar -->