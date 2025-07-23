<?php
//about theme info
add_action( 'admin_menu', 'vw_project_management_gettingstarted' );
function vw_project_management_gettingstarted() {
	add_theme_page( esc_html__('About VW Project Management', 'vw-project-management'), esc_html__('Theme Demo Import', 'vw-project-management'), 'edit_theme_options', 'vw_project_management_guide', 'vw_project_management_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_project_management_admin_theme_style() {
	wp_enqueue_style('vw-project-management-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('vw-project-management-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_project_management_admin_theme_style');

//guidline for about theme
function vw_project_management_mostrar_guide() { 
	//custom function about theme customizer
	$vw_project_management_return = add_query_arg( array()) ;
	$vw_project_management_theme = wp_get_theme( 'vw-project-management' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to VW Project Management ', 'vw-project-management' ); ?> <span class="version"><?php esc_html_e( 'Version', 'vw-project-management' ); ?>: <?php echo esc_html($vw_project_management_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-project-management'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','vw-project-management'); ?></h2>
						<h4><?php esc_html_e('VW PROJECT MANAGEMENT THEME','vw-project-management'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','vw-project-management'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','vw-project-management'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','vw-project-management'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','vw-project-management'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'vw-project-management' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="vw_project_management_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'vw-project-management' ); ?></button>
			<button class="tablinks" onclick="vw_project_management_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-project-management' ); ?></button>
			<button class="tablinks" onclick="vw_project_management_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-project-management' ); ?></button>
  			<button class="tablinks" onclick="vw_project_management_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'vw-project-management' ); ?></button>
  			<button class="tablinks" onclick="vw_project_management_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 350+ Themes Bundle at $99', 'vw-project-management' ); ?></button>
		</div>

		<?php 
			$vw_project_management_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_project_management_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-project-management' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Project_Management_Plugin_Activation_Settings::get_instance();
				$vw_project_management_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-project-management-recommended-plugins">
				    <div class="vw-project-management-action-list">
				        <?php if ($vw_project_management_actions): foreach ($vw_project_management_actions as $key => $vw_project_management_actionValue): ?>
				                <div class="vw-project-management-action" id="<?php echo esc_attr($vw_project_management_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_project_management_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_project_management_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_project_management_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-project-management'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_project_management_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-project-management' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The VW Project Management WordPress Theme is an all-in-one solution designed specifically for businesses and professionals in need of effective project management. Ideal for project managers, consultants, and agencies, this theme provides a versatile platform to showcase your project management services, tools, and expertise. With customizable features, it offers an intuitive interface for managing project workflows, timelines, budgets, and teams. This theme is perfect for creating websites that highlight various aspects of project management, such as project planning, scheduling, execution, and tracking. It supports project tracking systems, Gantt charts, Kanban boards, and Agile methodologies, offering users a comprehensive view of their projects’ progress. Visually, the theme features clean layouts and responsive design, making it easy to navigate on both desktop and mobile devices. Customizable sections allow you to display project roadmaps, milestones, project deliverables, and project documentation in an organized and user-friendly manner. Additionally, the theme supports project collaboration and communication tools, helping teams stay on track with project deadlines and goals. For those who offer project management consulting services, the VW Project Management WordPress Theme allows seamless integration with project management software, resource management tools, and client portals. With built-in SEO optimization, this theme helps improve visibility and attract potential clients.','vw-project-management'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-project-management' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-project-management' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-project-management' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-project-management'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-project-management'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-project-management'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-project-management'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-project-management'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-project-management'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-project-management'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-project-management'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-project-management'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-project-management' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-project-management'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_project_management_top_bar') ); ?>" target="_blank"><?php esc_html_e('Header','vw-project-management'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_project_management_banner_section') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','vw-project-management'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_project_management_project_section') ); ?>" target="_blank"><?php esc_html_e('Project Section','vw-project-management'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_project_management_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-project-management'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-project-management'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_project_management_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-project-management'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_project_management_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-project-management'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-project-management'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-project-management'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-project-management'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-project-management'); ?></span><?php esc_html_e(' Go to ','vw-project-management'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-project-management'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-project-management'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-project-management'); ?></span><?php esc_html_e(' Go to ','vw-project-management'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-project-management'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-project-management'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','vw-project-management'); ?> <a class="doc-links" href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','vw-project-management'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-project-management' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Project Management WordPress Theme is a versatile, user-friendly theme designed to cater to the needs of professionals in the project management industry. Whether youre a project manager, consultant, or team leader, this theme provides all the tools you need to effectively manage and track projects from start to finish. Built with responsive design in mind, it ensures that your project management website looks great on all devices. This theme is ideal for managing project planning, tracking, scheduling, and execution. It comes equipped with project management software integration, task management systems, and real-time project reporting features, allowing for seamless collaboration, task delegation, and tracking. The Project Management WordPress Theme also includes customizable project dashboards, project milestones, and Gantt charts, offering visual insights into project progress, deadlines, and resource allocation. Additionally, with optimized codes and a clean design, the theme helps your site load faster while providing a secure environment for managing sensitive project data. Its also SEO-friendly, ensuring your website ranks higher in search engines.','vw-project-management'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-project-management'); ?></a>
					<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-project-management'); ?></a>
					<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-project-management'); ?></a>
					<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 350+ Themes Bundle at $99', 'vw-project-management'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-project-management' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-project-management'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-project-management'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-project-management'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-project-management'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'vw-project-management'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-project-management'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-project-management'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-project-management'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-project-management'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-project-management'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'vw-project-management'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'vw-project-management'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-project-management'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-project-management'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-project-management'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-project-management'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'vw-project-management'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('VW Project Management ', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'vw-project-management'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-project-management'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-project-management' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 350+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-project-management'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-project-management' ); ?></h4>
		    		<p><?php esc_html_e('350+ Premium Themes & 5+ Plugins.', 'vw-project-management'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-project-management'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-project-management'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-project-management'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-project-management'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!', 'vw-project-management'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-project-management'); ?></a>
					<a href="<?php echo esc_url( VW_PROJECT_MANAGEMENT_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-project-management'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>