<?php
/**
 * Custom Contact us Widget
 */

class VW_Project_Management_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'VW_Project_Management_Contact_Widget', 
			__('VW Contact us', 'vw-project-management'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'vw-project-management' ), ) 
		);
	}
	
	public function widget( $vw_project_management_args, $vw_project_management_instance ) {
		?>
		<aside class="widget">
			<?php
			$vw_project_management_title = isset( $vw_project_management_instance['title'] ) ? $vw_project_management_instance['title'] : '';
			$vw_project_management_phone = isset( $vw_project_management_instance['phone'] ) ? $vw_project_management_instance['phone'] : '';
			$vw_project_management_email = isset( $vw_project_management_instance['email'] ) ? $vw_project_management_instance['email'] : '';
			$vw_project_management_address = isset( $vw_project_management_instance['address'] ) ? $vw_project_management_instance['address'] : '';
			$vw_project_management_timing = isset( $vw_project_management_instance['timing'] ) ? $vw_project_management_instance['timing'] : '';
			$vw_project_management_longitude = isset( $vw_project_management_instance['longitude'] ) ? $vw_project_management_instance['longitude'] : '';
			$vw_project_management_latitude = isset( $vw_project_management_instance['latitude'] ) ? $vw_project_management_instance['latitude'] : '';
			$vw_project_management_contact_form = isset( $vw_project_management_instance['contact_form'] ) ? $vw_project_management_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($vw_project_management_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($vw_project_management_title); ?></h3><?php } ?>
		        <?php if(!empty($vw_project_management_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'vw-project-management'); ?></span><span class="custom_desc"><?php echo esc_html($vw_project_management_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($vw_project_management_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'vw-project-management'); ?></span><span class="custom_desc"><?php echo esc_html($vw_project_management_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($vw_project_management_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'vw-project-management'); ?></span><span class="custom_desc"><?php echo esc_html($vw_project_management_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($vw_project_management_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','vw-project-management'); ?></span><span class="custom_desc"><?php echo esc_html($vw_project_management_timing); ?></span></p><?php } ?>
		        <?php if(!empty($vw_project_management_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($vw_project_management_longitude); ?>,<?php echo esc_html($vw_project_management_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($vw_project_management_contact_form) ){ ?><?php echo do_shortcode($vw_project_management_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $vw_project_management_instance ) {

		$vw_project_management_title= ''; $vw_project_management_phone= ''; $vw_project_management_email = ''; $vw_project_management_address = ''; $vw_project_management_timing = ''; $vw_project_management_longitude = ''; $vw_project_management_latitude = ''; $vw_project_management_contact_form = ''; 
		
		$vw_project_management_title = isset( $vw_project_management_instance['title'] ) ? $vw_project_management_instance['title'] : '';
		$vw_project_management_phone = isset( $vw_project_management_instance['phone'] ) ? $vw_project_management_instance['phone'] : '';
		$vw_project_management_email = isset( $vw_project_management_instance['email'] ) ? $vw_project_management_instance['email'] : '';
		$vw_project_management_address = isset( $vw_project_management_instance['address'] ) ? $vw_project_management_instance['address'] : '';
		$vw_project_management_timing = isset( $vw_project_management_instance['timing'] ) ? $vw_project_management_instance['timing'] : '';
		$vw_project_management_longitude = isset( $vw_project_management_instance['longitude'] ) ? $vw_project_management_instance['longitude'] : '';
		$vw_project_management_latitude = isset( $vw_project_management_instance['latitude'] ) ? $vw_project_management_instance['latitude'] : '';
		$vw_project_management_contact_form = isset( $vw_project_management_instance['contact_form'] ) ? $vw_project_management_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','vw-project-management'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($vw_project_management_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $vw_project_management_new_instance, $vw_project_management_old_instance ) {
		$vw_project_management_instance = array();	
		$vw_project_management_instance['title'] = (!empty($vw_project_management_new_instance['title']) ) ? strip_tags($vw_project_management_new_instance['title']) : '';
		$vw_project_management_instance['phone'] = (!empty($vw_project_management_new_instance['phone']) ) ? vw_project_management_sanitize_phone_number($vw_project_management_new_instance['phone']) : '';
		$vw_project_management_instance['email'] = (!empty($vw_project_management_new_instance['email']) ) ? sanitize_email($vw_project_management_new_instance['email']) : '';
		$vw_project_management_instance['address'] = (!empty($vw_project_management_new_instance['address']) ) ? strip_tags($vw_project_management_new_instance['address']) : '';
		$vw_project_management_instance['timing'] = (!empty($vw_project_management_new_instance['timing']) ) ? strip_tags($vw_project_management_new_instance['timing']) : '';
		$vw_project_management_instance['longitude'] = (!empty($vw_project_management_new_instance['longitude']) ) ? strip_tags($vw_project_management_new_instance['longitude']) : '';
		$vw_project_management_instance['latitude'] = (!empty($vw_project_management_new_instance['latitude']) ) ? strip_tags($vw_project_management_new_instance['latitude']) : '';
		$vw_project_management_instance['contact_form'] = (!empty($vw_project_management_new_instance['contact_form']) ) ? strip_tags($vw_project_management_new_instance['contact_form']) : '';
        
		return $vw_project_management_instance;
	}
}
// Register and load the widget
function vw_project_management_contact_custom_load_widget() {
	register_widget( 'VW_Project_Management_Contact_Widget' );
}
add_action( 'widgets_init', 'vw_project_management_contact_custom_load_widget' );