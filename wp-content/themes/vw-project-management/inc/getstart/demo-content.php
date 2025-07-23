<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $vw_project_management_demo_import_completed = get_option('vw_project_management_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($vw_project_management_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-project-management') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-project-management') . '</a></span>';
        }

		// POST and update the customizer and other related data of THE COURIER SERVICESPRO
        if (isset($_POST['submit'])) {

        // Check if ibtana visual editor is installed and activated
        if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
          // Install the plugin if it doesn't exist
          $vw_project_management_plugin_slug = 'ibtana-visual-editor';
          $vw_project_management_plugin_file = 'ibtana-visual-editor/plugin.php';

          // Check if plugin is installed
          $vw_project_management_installed_plugins = get_plugins();
          if (!isset($vw_project_management_installed_plugins[$vw_project_management_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $vw_project_management_upgrader = new Plugin_Upgrader();
              $vw_project_management_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($vw_project_management_plugin_file);
        }  

        // ------- Create Nav Menu --------
        $vw_project_management_menuname = 'Main Menus';
        $vw_project_management_bpmenulocation = 'primary';
        $vw_project_management_menu_exists = wp_get_nav_menu_object($vw_project_management_menuname);

        if (!$vw_project_management_menu_exists) {
            $vw_project_management_menu_id = wp_create_nav_menu($vw_project_management_menuname);

            // Create Home Page
            $vw_project_management_home_title = 'Home';
            $vw_project_management_home = array(
                'post_type' => 'page',
                'post_title' => $vw_project_management_home_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'home'
            );
            $vw_project_management_home_id = wp_insert_post($vw_project_management_home);
            // Assign Home Page Template
            add_post_meta($vw_project_management_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $vw_project_management_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($vw_project_management_menu_id, 0, array(
                'menu-item-title' => __('Home', 'vw-project-management'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $vw_project_management_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Pages Page with Dummy Content
            $vw_project_management_pages_title = 'Pages';
            $vw_project_management_pages_content = '
            Explore all the pages we have on our website. Find information about our services, company, and more.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $vw_project_management_pages = array(
                'post_type' => 'page',
                'post_title' => $vw_project_management_pages_title,
                'post_content' => $vw_project_management_pages_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'pages'
            );
            $vw_project_management_pages_id = wp_insert_post($vw_project_management_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($vw_project_management_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'vw-project-management'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $vw_project_management_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $vw_project_management_about_title = 'About Us';
            $vw_project_management_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $vw_project_management_about = array(
                'post_type' => 'page',
                'post_title' => $vw_project_management_about_title,
                'post_content' => $vw_project_management_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $vw_project_management_about_id = wp_insert_post($vw_project_management_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($vw_project_management_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'vw-project-management'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $vw_project_management_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Set the menu location if it's not already set
            if (!has_nav_menu($vw_project_management_bpmenulocation)) {
                $vw_project_management_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                if (empty($vw_project_management_locations)) {
                    $vw_project_management_locations = array();
                }
                $vw_project_management_locations[$vw_project_management_bpmenulocation] = $vw_project_management_menu_id;
                set_theme_mod('nav_menu_locations', $vw_project_management_locations);
            }
        }

        // Set the demo import completion flag
		update_option('vw_project_management_demo_import_completed', true);
		// Display success message and "View Site" button
		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-project-management') . '</p>';
		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-project-management') . '</a></span>';
        //end 

        // Header
        set_theme_mod( 'vw_project_management_topbar_button_label', 'Get Start' );
        set_theme_mod( 'vw_project_management_topbar_button_url', '#' );
        
        // Banner Settings
        set_theme_mod( 'vw_project_management_banner_title', 'Easy Way To Manage Your Project' );
        set_theme_mod( 'vw_project_management_banner_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer .' );
        set_theme_mod( 'vw_project_management_done_progress_month', '63' );
        set_theme_mod( 'vw_project_management_review_progress_month', '90' );
        set_theme_mod( 'vw_project_management_doing_progress_month', '55' );
        set_theme_mod( 'vw_project_management_done_progress_year', '63' );
        set_theme_mod( 'vw_project_management_review_progress_year', '90' );
        set_theme_mod( 'vw_project_management_doing_progress_year', '55' );
        set_theme_mod( 'vw_project_management_video_button_url', '#' );
        set_theme_mod( 'vw_project_management_banner_img', get_template_directory_uri().'/assets/images/middle-img.png' );
        set_theme_mod( 'vw_project_management_banner_graph_img', get_template_directory_uri().'/assets/images/graph-img.png' );









        // Project Section
        set_theme_mod( 'vw_project_management_project_section_small_title', 'Our Services' );
        set_theme_mod( 'vw_project_management_project_section_title', 'Project Management Services' );
        set_theme_mod( 'vw_project_management_project_section_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text' );
        set_theme_mod( 'vw_project_management_project_button_label', 'Explore More' );
        set_theme_mod( 'vw_project_management_project_button_url', '#' );

        set_theme_mod( 'vw_project_management_claases_number', '3' );

        // select Post Box
        $vw_project_management_title_array = array("Collaboration Service", "Communication Services", "Team Collaboration Platform");
        for ($vw_project_management_i = 1; $vw_project_management_i <= 3; $vw_project_management_i++) {
            set_theme_mod( 'vw_project_management_sale_price'.$vw_project_management_i, 'fa-solid fa-comments' );
            // Create post
            $vw_project_management_title = $vw_project_management_title_array[$vw_project_management_i - 1];
            $vw_project_management_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text';            
            $vw_project_management_my_post = array(
                 'post_title'   => wp_strip_all_tags($vw_project_management_title),
                 'post_content' => $vw_project_management_content,
                 'post_status'  => 'publish',
                 'post_type'    => 'post',
            );
            $vw_project_management_post_id = wp_insert_post($vw_project_management_my_post);
            set_theme_mod('vw_project_management_services_category' . $vw_project_management_i, $vw_project_management_post_id);
        } 

        //Copyright Text
        set_theme_mod( 'vw_project_management_footer_text', 'By VWThemes' );  
     
        }
    ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for VW Project Management', 'vw-project-management'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_project_management_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('vw_project_management_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'vw-project-management'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
