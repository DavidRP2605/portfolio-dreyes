<?php

Class VW_Project_Management_My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
  function widget($vw_project_management_args, $vw_project_management_instance) {
      if ( ! isset( $vw_project_management_args['widget_id'] ) ) {
      $vw_project_management_args['widget_id'] = $this->id;
    }
    $vw_project_management_title = ( ! empty( $vw_project_management_instance['title'] ) ) ? $vw_project_management_instance['title'] : __( 'Recent Posts', 'vw-project-management' );
    /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
    $vw_project_management_title = apply_filters( 'widget_title', $vw_project_management_title, $vw_project_management_instance, $this->id_base );
    $vw_project_management_number = ( ! empty( $vw_project_management_instance['number'] ) ) ? absint( $vw_project_management_instance['number'] ) : 5;
    if ( ! $vw_project_management_number )
        $vw_project_management_number = 5;
    $vw_project_management_show_date = isset( $vw_project_management_instance['show_date'] ) ? $vw_project_management_instance['show_date'] : false;
    /**
     * Filter the arguments for the Recent Posts widget.
     *
     * @since 3.4.0
     *
     * @see WP_Query::get_posts()
     *
     * @param array $vw_project_management_args An array of arguments used to retrieve the recent posts.
     */
    $vw_project_management_r = new WP_Query( apply_filters( 'widget_posts_args', array(
        'posts_per_page'      => $vw_project_management_number,
        'no_found_rows'       => true,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true
    ) ) );
    if ($vw_project_management_r->have_posts()) :
    ?>
    <?php echo $vw_project_management_args['before_widget']; ?>
    <?php if ( $vw_project_management_title ) {
        echo $vw_project_management_args['before_title'] . esc_html($vw_project_management_title) . $vw_project_management_args['after_title'];
    } ?>
    <ul>
      <?php while ( $vw_project_management_r->have_posts() ) : $vw_project_management_r->the_post(); ?>
      <li>
        <div class="recent-post-box">
          <div class="media post-thumb">
            <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
            <div class="media-body post-content">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <div class="d-flex date-comment">
               <?php if ( $vw_project_management_show_date ) : ?>
                <p class="post-date"><?php the_date(); ?></p>
               <?php endif; ?>
               <div class="date-comment1"><?php comments_number( __('0 Comment', 'vw-project-management'), __('0 Comments', 'vw-project-management'), __('% Comments', 'vw-project-management') ); ?></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>

    <?php echo $vw_project_management_args['after_widget'];

    endif;
  }
}
function vw_project_management_my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('VW_Project_Management_My_Recent_Posts_Widget');
}
add_action('widgets_init', 'vw_project_management_my_recent_widget_registration');
