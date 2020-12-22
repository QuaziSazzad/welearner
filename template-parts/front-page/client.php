<?php
/**
 * template Tranding
 *
 * @package welearner
 */

?>
    <!--client-area start-->
      <section class="client-area bg-gray text-center pd-top-90">
          <div class="container">
              <?php if( !empty( get_theme_mod( 'client_title' ) ) ) : ?>
                  <div class="section-title text-center">
                      <p><?php echo esc_html( get_theme_mod( 'client_title' ) ); ?></p>
                  </div>
              <?php endif; ?>
              <div class="client-slider owl-carousel">
                <?php
                   $welearner_client = new \WP_Query(array(  
                   'post_type' =>  'client',
                    )  );  
                    if ( $welearner_client->have_posts() ) :
                     while ( $welearner_client->have_posts()) : $welearner_client->the_post(); 
                     if( has_post_thumbnail() ) :
                 ?>
                    <div class="item">
                       <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; endwhile; wp_reset_postdata(); endif; ?>
              </div>
          </div>
      </section>
      <!--client-area end-->
