<?php
/**
 * The template for displaying search forms in vw-project-management
 *
 * @package VW Project Management 
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','vw-project-management' ); ?>" value="<?php echo esc_attr( get_search_query()); ?>" name="s">
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'vw-project-management' ); ?></span>
		<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','vw-project-management' ); ?>">
	</label>
</form>