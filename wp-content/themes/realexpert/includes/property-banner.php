<header id="banner" style="min-height:0px !important;">
	<div id="banner_container" class="container">
		<h4 class="banner-title"><?php echo get_the_title(); //echo apply_filters( 'banner_title', '' );?></h4>
		<p class="banner-subtitle"><?php echo apply_filters( 'banner_sub_title', get_bloginfo( 'description' ) );?></p>
		<?php
			/*
			if( is_page() ){
				echo '<h3 class="banner-title">'.get_the_title().'</h3>';
			}
			if( is_singular( 'property' ) ){
				echo '<h3 class="banner-title">'.__( 'Property Details', 'realexpert' ).'</h3>';
				echo '<p class="banner-subtitle">'.get_the_title().'';
			}

			if ( is_post_type_archive( 'agent' ) ) {
				echo '<h3 class="banner-title">'.__( 'Agents', 'realexpert' ).'</h3>';
			}
			*/
		?>
	</div>
</header>