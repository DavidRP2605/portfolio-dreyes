<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Project Management 
 */
?>

    <footer role="contentinfo">
        <div class="footer-section">
            <?php if (get_theme_mod('vw_project_management_footer_hide_show', true)){ ?>
                <aside id="footer" class="copyright-wrapper" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'vw-project-management' ); ?>">
                    <div class="container">
                        <?php
                            $vw_project_management_count = 0;
                            
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                $vw_project_management_count++;
                            }
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                $vw_project_management_count++;
                            }
                            if ( is_active_sidebar( 'footer-3' ) ) {
                                $vw_project_management_count++;
                            }
                            if ( is_active_sidebar( 'footer-4' ) ) {
                                $vw_project_management_count++;
                            }
                            // $vw_project_management_count == 0 none
                            if ( $vw_project_management_count == 1 ) {
                                $vw_project_management_colmd = 'col-md-12 col-sm-12';
                            } elseif ( $vw_project_management_count == 2 ) {
                                $vw_project_management_colmd = 'col-md-6 col-sm-6';
                            } elseif ( $vw_project_management_count == 3 ) {
                                $vw_project_management_colmd = 'col-md-4 col-sm-4';
                            } else {
                                $vw_project_management_colmd = 'col-lg-3 col-md-6 col-sm-6';
                            }
                        ?>
                        <div class="row">
                            <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($vw_project_management_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-1')) : ?>
                                    <?php dynamic_sidebar('footer-1'); ?>
                                <?php else : ?>
                                    <aside id="search" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'firstwidget', 'vw-project-management' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Search', 'vw-project-management' ); ?></h3>
                                        <?php get_search_form(); ?>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($vw_project_management_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-2')) : ?>
                                    <?php dynamic_sidebar('footer-2'); ?>
                                <?php else : ?>
                                    <aside id="archives" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'secondwidget', 'vw-project-management' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Archives', 'vw-project-management' ); ?></h3>
                                        <ul>
                                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($vw_project_management_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-3')) : ?>
                                    <?php dynamic_sidebar('footer-3'); ?>
                                <?php else : ?>
                                    <aside id="meta" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'thirdwidget', 'vw-project-management' ); ?>">
                                        <h3 class="widget-title"><?php esc_html_e( 'Meta', 'vw-project-management' ); ?></h3>
                                        <ul>
                                            <?php wp_register(); ?>
                                            <li><?php wp_loginout(); ?></li>
                                            <?php wp_meta(); ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                            <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($vw_project_management_colmd); ?> col-lg-3 col-md-6 col-xs-12 footer-block">
                                <?php if (is_active_sidebar('footer-4')) : ?>
                                    <?php dynamic_sidebar('footer-4'); ?>
                                <?php else : ?>
                                    <aside id="categories" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e( 'fourthwidget', 'vw-project-management' ); ?>"> 
                                        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'vw-project-management' ); ?></h3>          
                                        <ul>
                                            <?php wp_list_categories('title_li=');  ?>
                                        </ul>
                                    </aside>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </aside>
            <?php }?>
        </div>
        <div class="footer <?php if( get_theme_mod( 'vw_project_management_copyright_sticky', false) == 1) { ?> copyright-sticky"<?php } else { ?>close-sticky <?php } ?>">
            <?php if (get_theme_mod('vw_project_management_copyright_hide_show', true)) {?>
                <div id="footer-2" class="text-center">
                  	<div class="copyright container">
                        <p class="mb-0 py-3"><?php vw_project_management_credit(); ?><?php echo esc_html(get_theme_mod('vw_project_management_footer_text',__(' By VWThemes','vw-project-management'))); ?></p>
                        <?php if(get_theme_mod('vw_project_management_footer_icon',false) != false) {?>
                            <?php dynamic_sidebar('footer-icon'); ?>
                        <?php }?>  
                        <?php if( get_theme_mod( 'vw_project_management_hide_show_scroll',true) == 1 || get_theme_mod( 'vw_project_management_resp_scroll_top_hide_show',true) == 1) { ?>
                            <?php $vw_project_management_theme_lay = get_theme_mod( 'vw_project_management_scroll_top_alignment','Right');
                            if($vw_project_management_theme_lay == 'Left'){ ?>
                                <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('vw_project_management_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'vw-project-management' ); ?></span></a>
                            <?php }else if($vw_project_management_theme_lay == 'Center'){ ?>
                                <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('vw_project_management_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'vw-project-management' ); ?></span></a>
                            <?php }else{ ?>
                                <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('vw_project_management_scroll_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'vw-project-management' ); ?></span></a>
                            <?php }?>
                        <?php }?>
                  	</div>
                  	<div class="clear"></div>
                </div>
            <?php }?>
        </div>    
    </footer>
        <?php wp_footer(); ?>
    </body>
</html>