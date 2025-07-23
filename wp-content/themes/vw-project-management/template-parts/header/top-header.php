<?php
/**
 * The template part for Top Header
 *
 * @package VW Project Management 
 * @subpackage vw-project-management
 * @since vw-project-management 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'vw_project_management_sticky_header', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="main-topbar py-2">
    <div class="container">
      <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12 align-self-center">
          <div class="logo pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $vw_project_management_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $vw_project_management_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('vw_project_management_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('vw_project_management_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $vw_project_management_description = get_bloginfo( 'description', 'display' );
                if ( $vw_project_management_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('vw_project_management_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0 text-start">
                  <?php echo esc_html($vw_project_management_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-3 col-sm-3 col-4 align-items-center header-sec-top d-flex justify-content-between">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>
        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-5 col-sm-5 col-8 align-items-center d-flex justify-content-end top-buttons gap-4">
          <?php if (get_theme_mod('vw_project_management_search_hide_show', true)){ ?>
            <div class="search-box">
              <span><a href="#"><i class='<?php echo esc_attr(get_theme_mod('vw_project_management_search_open_icon','fas fa-search')); ?>'></i></a></span>
            </div>
            <div class="serach_outer">
              <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_project_management_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
          <?php } ?>
          <?php if ( get_theme_mod('vw_project_management_topbar_button_url') != '' || get_theme_mod('vw_project_management_topbar_button_label') != '' ) {?>
            <div class ="topbar-btn">
              <a href="<?php echo esc_url(get_theme_mod('vw_project_management_topbar_button_url'));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('vw_project_management_topbar_button_label'));?><i class="<?php echo esc_attr(get_theme_mod('vw_project_management_header_btn_icon','fa-solid fa-arrow-right')); ?> ms-3"></i></a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>