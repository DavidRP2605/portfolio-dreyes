<?php
/**
 * Custom Social Widget
 */

class VW_Project_Management_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'VW_Project_Management_Social_Widget',
			__('VW Social Icon', 'vw-project-management'),
			array( 'description' => __( 'Widget for Social icons section', 'vw-project-management' ), ) 
		);
	}

	public function widget( $vw_project_management_args, $vw_project_management_instance ) { ?>
		<div class="widget">
			<?php
			$vw_project_management_title = isset( $vw_project_management_instance['title'] ) ? $vw_project_management_instance['title'] : '';
			$vw_project_management_facebook = isset( $vw_project_management_instance['facebook'] ) ? $vw_project_management_instance['facebook'] : '';
			$vw_project_management_twitter = isset( $vw_project_management_instance['twitter'] ) ? $vw_project_management_instance['twitter'] : '';
			$vw_project_management_instagram = isset( $vw_project_management_instance['instagram'] ) ? $vw_project_management_instance['instagram'] : '';
			$vw_project_management_youtube = isset( $vw_project_management_instance['youtube'] ) ? $vw_project_management_instance['youtube'] : '';
			$vw_project_management_dribbal = isset( $vw_project_management_instance['dribbal'] ) ? $vw_project_management_instance['dribbal'] : '';
			$vw_project_management_linkedin = isset( $vw_project_management_instance['linkedin'] ) ? $vw_project_management_instance['linkedin'] : '';
			$vw_project_management_pinterest = isset( $vw_project_management_instance['pinterest'] ) ? $vw_project_management_instance['pinterest'] : '';
			$vw_project_management_tumblr = isset( $vw_project_management_instance['tumblr'] ) ? $vw_project_management_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($vw_project_management_title) ){ ?><h3 class="custom_title"><?php echo esc_html($vw_project_management_title); ?></h3><?php } ?>
	        <?php if(!empty($vw_project_management_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($vw_project_management_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','vw-project-management' );?></span></a></p><?php } ?>

	        <?php if(!empty($vw_project_management_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($vw_project_management_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','vw-project-management' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($vw_project_management_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($vw_project_management_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','vw-project-management' );?></span></a></p><?php } ?>

	        <?php if(!empty($vw_project_management_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($vw_project_management_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','vw-project-management' );?></span></a></p><?php } ?>

	        <?php if(!empty($vw_project_management_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($vw_project_management_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','vw-project-management' );?></span></a></p><?php } ?>

	        <?php if(!empty($vw_project_management_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($vw_project_management_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','vw-project-management' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($vw_project_management_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($vw_project_management_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','vw-project-management' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($vw_project_management_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($vw_project_management_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','vw-project-management' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $vw_project_management_instance ) {

		$vw_project_management_title= ''; $vw_project_management_facebook = ''; $vw_project_management_twitter = ''; $vw_project_management_linkedin = '';  $vw_project_management_pinterest = '';$vw_project_management_tumblr = ''; $vw_project_management_instagram = ''; $vw_project_management_youtube = ''; 

		$vw_project_management_title = isset( $vw_project_management_instance['title'] ) ? $vw_project_management_instance['title'] : '';
		$vw_project_management_facebook = isset( $vw_project_management_instance['facebook'] ) ? $vw_project_management_instance['facebook'] : '';
		$vw_project_management_instagram = isset( $vw_project_management_instance['instagram'] ) ? $vw_project_management_instance['instagram'] : '';
		$vw_project_management_twitter = isset( $vw_project_management_instance['twitter'] ) ? $vw_project_management_instance['twitter'] : '';
		$vw_project_management_youtube = isset( $vw_project_management_instance['youtube'] ) ? $vw_project_management_instance['youtube'] : '';
		$vw_project_management_dribbal = isset( $vw_project_management_instance['dribbal'] ) ? $vw_project_management_instance['dribbal'] : '';
		$vw_project_management_linkedin = isset( $vw_project_management_instance['linkedin'] ) ? $vw_project_management_instance['linkedin'] : '';
		$vw_project_management_pinterest = isset( $vw_project_management_instance['pinterest'] ) ? $vw_project_management_instance['pinterest'] : '';
		$vw_project_management_tumblr = isset( $vw_project_management_instance['tumblr'] ) ? $vw_project_management_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','vw-project-management'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','vw-project-management'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $vw_project_management_new_instance, $vw_project_management_old_instance ) {
		$vw_project_management_instance = array();
		$vw_project_management_instance['title'] = (!empty($vw_project_management_new_instance['title']) ) ? strip_tags($vw_project_management_new_instance['title']) : '';	
        $vw_project_management_instance['facebook'] = (!empty($vw_project_management_new_instance['facebook']) ) ? esc_url_raw($vw_project_management_new_instance['facebook']) : '';
        $vw_project_management_instance['twitter'] = (!empty($vw_project_management_new_instance['twitter']) ) ? esc_url_raw($vw_project_management_new_instance['twitter']) : '';
        $vw_project_management_instance['instagram'] = (!empty($vw_project_management_new_instance['instagram']) ) ? esc_url_raw($vw_project_management_new_instance['instagram']) : '';
        $vw_project_management_instance['youtube'] = (!empty($vw_project_management_new_instance['youtube']) ) ? esc_url_raw($vw_project_management_new_instance['youtube']) : '';
        $vw_project_management_instance['dribbal'] = (!empty($vw_project_management_new_instance['dribbal']) ) ? esc_url_raw($vw_project_management_new_instance['dribbal']) : '';
        $vw_project_management_instance['linkedin'] = (!empty($vw_project_management_new_instance['linkedin']) ) ? esc_url_raw($vw_project_management_new_instance['linkedin']) : '';
        $vw_project_management_instance['pinterest'] = (!empty($vw_project_management_new_instance['pinterest']) ) ? esc_url_raw($vw_project_management_new_instance['pinterest']) : '';
        $vw_project_management_instance['tumblr'] = (!empty($vw_project_management_new_instance['tumblr']) ) ? esc_url_raw($vw_project_management_new_instance['tumblr']) : '';
     	
     	
		return $vw_project_management_instance;
	}
}

function vw_project_management_custom_load_widget() {
	register_widget( 'VW_Project_Management_Social_Widget' );
}
add_action( 'widgets_init', 'vw_project_management_custom_load_widget' );