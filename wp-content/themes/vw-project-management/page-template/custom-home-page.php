<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">

  <?php do_action( 'vw_project_management_above_banner' ); ?>
  
  <?php if (get_theme_mod('vw_project_management_hide_show_banner_section', true)) { ?>
    <section id="banner-sec" class="mb-5">
      <div class="banner-img position-relative">
        <?php if (get_theme_mod('vw_project_management_banner_bg_img') != "") { ?>
          <img class="banner-bg-img" src="<?php echo esc_url(get_theme_mod('vw_project_management_banner_bg_img')); ?>" alt="<?php echo esc_attr('background-image', 'vw-project-management'); ?>">
        <?php } else { ?>
          <img class="banner-bg-img" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-bg.png" alt="<?php echo esc_attr('background-image', 'vw-project-management'); ?>">
        <?php } ?>
        <div class="banner-content position-absolute text-center">
          <div class="container">
            <div class="bnr-text-box">
              <?php if (get_theme_mod('vw_project_management_banner_title') != '') { ?>
                <h1 class="banner-title text-capitalize"><?php echo esc_html(get_theme_mod('vw_project_management_banner_title')); ?></h1>
              <?php } ?>
              <?php if (get_theme_mod('vw_project_management_banner_text') != '') { ?>
                <p class="banner-text mt-2 mb-4 text-capitalize"><?php echo esc_html(get_theme_mod('vw_project_management_banner_text')); ?></p>
              <?php } ?>
            </div>
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4 col-12 align-self-center text-end progress-box mb-5">
                <div class="task-box p-lg-3 p-md-2 p-3">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-4 col-6 align-self-center text-start">
                      <p class="task-text mb-0"><?php echo esc_html__('Task','vw-project-management'); ?></p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-6 align-self-center text-end position-relative">
                      <select id="timeFilter" class="form-select form-select-sm w-auto d-inline pe-4">
                        <option value="month"><?php echo esc_html__('This Month','vw-project-management'); ?></option>
                        <option value="year"><?php echo esc_html__('This Year','vw-project-management'); ?></option>
                      </select>
                      <div class="dropdown-box position-absolute">
                        <i class="fa-solid fa-angle-down"></i>
                      </div>
                    </div>
                  </div>
                  <?php 
                    $vw_project_management_progress_data = array(
                      'done' => array(
                        'month' => get_theme_mod('vw_project_management_done_progress_month', '0'),
                        'year' => get_theme_mod('vw_project_management_done_progress_year', '0'),
                      ),
                      'review' => array(
                        'month' => get_theme_mod('vw_project_management_review_progress_month', '0'),
                        'year' => get_theme_mod('vw_project_management_review_progress_year', '0'),
                      ),
                      'doing' => array(
                        'month' => get_theme_mod('vw_project_management_doing_progress_month', '0'),
                        'year' => get_theme_mod('vw_project_management_doing_progress_year', '0'),
                      )
                    );
                  ?>
                  <?php foreach (['done', 'review', 'doing'] as $vw_project_management_type): ?>
                    <div class="bar-box text-start mt-2">
                      <?php 
                        $vw_project_management_monthVal = intval(str_replace('%', '', $vw_project_management_progress_data[$vw_project_management_type]['month']));
                        $vw_project_management_yearVal = intval(str_replace('%', '', $vw_project_management_progress_data[$vw_project_management_type]['year']));
                      ?>
                      <div class="d-flex justify-content-between px-2 mb-1">
                        <p class="bar-text mb-0"><?php echo ucfirst($vw_project_management_type); ?></p>
                        <div class="progress-value <?php echo esc_attr($vw_project_management_type); ?>-progress-value" data-month="<?php echo esc_attr($vw_project_management_monthVal); ?>" data-year="<?php echo esc_attr($vw_project_management_yearVal); ?>"><?php echo esc_html($vw_project_management_monthVal) . esc_html__('%', 'vw-project-management'); ?>
                        </div>
                      </div>
                      <div class="progress-wrapper text-center mb-2">
                        <div class="progress">
                          <div class="progress-bar <?php echo $vw_project_management_type; ?>-progress-bar" role="progressbar" style="width: <?php echo $vw_project_management_monthVal; ?>%;" aria-valuenow="<?php echo $vw_project_management_monthVal; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="video-btn mt-5">
                  <div class="video-bg-img">
                    <?php if (get_theme_mod('vw_project_management_video_bg_img') != "") { ?>
                      <img src="<?php echo esc_url(get_theme_mod('vw_project_management_video_bg_img')); ?>" alt="<?php echo esc_attr('background-image', 'vw-project-management'); ?>">
                    <?php } else { ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/video-bg.png" alt="<?php echo esc_attr('background-image', 'vw-project-management'); ?>">
                    <?php } ?>
                    <div class="video-overlay position-absolute"></div>
                    <a id="openBtn">
                     <i class="<?php echo esc_attr(get_theme_mod('vw_project_management_video_button_icon','fas fa-play')); ?>"></i>
                    </a>
                  </div>
                  <div class="overlay" id="videoOverlay">
                    <div class="popup">
                      <span class="close-btn"><i class="fas fa-times"></i></span>
                      <iframe width="100%" height="100%" src="<?php echo esc_url(get_theme_mod('vw_project_management_video_button_url'));?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-12 align-self-center bnr-middle-img text-center">
                <?php if (get_theme_mod('vw_project_management_banner_img') != "") { ?>
                  <img src="<?php echo esc_url(get_theme_mod('vw_project_management_banner_img')); ?>" alt="<?php echo esc_attr('background-image', 'vw-project-management'); ?>">
                <?php }?>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-12 align-self-center graph-img text-start mb-5">
                <?php if (get_theme_mod('vw_project_management_banner_graph_img') != "") { ?>
                  <img src="<?php echo esc_url(get_theme_mod('vw_project_management_banner_graph_img')); ?>" alt="<?php echo esc_attr('background-image', 'vw-project-management'); ?>">
                <?php }?>
                <div class="banner-social-icon mt-3">
                  <?php if ( is_active_sidebar( 'banner-social-widget' ) ) : ?>                
                    <?php dynamic_sidebar('banner-social-widget'); ?>
                  <?php endif; ?>
                  <?php if ( is_active_sidebar( 'banner-social-widget' ) ) : ?>               
                    <?php dynamic_sidebar('banner-social-widget'); ?>
                  <?php else : ?>
                    <div class="widget">
                      <div class="custom-social-icons" >
                        <h3 class="custom_title"><?php echo esc_html('Follow ','vw-project-management') ?></h3>
                        <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a> 
                        <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>   
                        <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>   
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'vw_project_management_below_banner' ); ?>

  <!-- Project Section -->
  <?php if (get_theme_mod('vw_project_management_project_section_hide_show', true)){ ?>
    <section id="project-section" class="py-5">
      <div class="project-info-box">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-xl-4 col-lg-4 col-md-8 col-12 d-flex flex-column justify-content-between project-sec-content">
              <div class="project-box1">
                <?php if(get_theme_mod('vw_project_management_project_section_small_title') != '') {?>
                  <p class="small-title mb-0 text-capitalize"><?php echo esc_html(get_theme_mod('vw_project_management_project_section_small_title')) ?></p>
                <?php }?>
                <?php if(get_theme_mod('vw_project_management_project_section_title') != '') {?>
                  <h2 class="section-title text-capitalize mb-3 mt-1 position-relative"><?php echo esc_html(get_theme_mod('vw_project_management_project_section_title')) ?></h2>
                <?php }?>
                <?php if(get_theme_mod('vw_project_management_project_section_text') != '') {?>
                  <p class="service-text mb-3"><?php echo esc_html(get_theme_mod('vw_project_management_project_section_text')) ?></p>
                <?php }?>
              </div>
              <div class="project-box2">
                <?php if ( get_theme_mod('vw_project_management_project_button_label') != '' ) {?>
                  <div class ="project-btn">
                    <a href="<?php echo esc_url(get_theme_mod('vw_project_management_project_button_url'));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('vw_project_management_project_button_label'));?><i class="<?php echo esc_attr(get_theme_mod('vw_project_management_project_btn_icon','fa-solid fa-arrow-right')); ?> ms-3"></i></a>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="col-xl-8 col-xl-8 col-lg-8 col-md-12 col-12">
              <div class="owl-carousel">
                <?php
                  $vw_project_management_featured_post = get_theme_mod('vw_project_management_claases_number');
                  for ($vw_project_management_i=1; $vw_project_management_i <= $vw_project_management_featured_post; $vw_project_management_i++) {
                  $vw_project_management_postData=  get_theme_mod('vw_project_management_services_category'.$vw_project_management_i);
                  if($vw_project_management_postData){ ?>
                    <?php
                      $vw_project_management_args = array(
                        'p' => esc_html($vw_project_management_postData ,'vw-project-management'),
                        'post_type' => 'post'
                      );
                      $vw_project_management_query = new WP_Query( $vw_project_management_args );
                      if ( $vw_project_management_query->have_posts() ) :
                        while ( $vw_project_management_query->have_posts() ) : $vw_project_management_query->the_post(); ?>
                        <div class="service-box position-relative">
                          <div class="service-bg-img position-relative">
                            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/post-bg.png" alt="<?php echo esc_attr('Post Image', 'vw-project-management'); ?>">
                          </div>
                          <div class="popular-content p-5 text-center position-absolute">
                            <i class="<?php echo esc_attr(get_theme_mod('vw_project_management_project_card_icon'.$vw_project_management_i,'fa-solid fa-comments')); ?>"></i>
                            <h3 class="text-capitalize service-heading mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                            <p class="service-text pb-3 mb-0"><?php echo wp_trim_words(get_the_content(), 25); ?>...</p>
                            <a href="<?php the_permalink(); ?>" class="post-btn"><?php echo esc_html('Explore More','vw-project-management'); ?></a>
                          </div>
                        </div>
                      <?php endwhile;
                        wp_reset_postdata();
                      endif; ?>
                  <?php }
                } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'vw_project_management_after_service' ); ?>

  <div id="content-vw" class="entry-content">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 