<?php
/**
 * template Tranding
 *
 * @package welearner
 */

?>

      <!-- counter -->
         <section class="counter-area pd-top-60 pd-bottom-60">
          <div class="container">
              <div class="row justify-content-center">
                 <?php
                     $welearner_counter = new \WP_Query(array(  
                     'post_type' =>  'counter',
                     'posts_per_page'=>3  
                      )  );  
                      if ( $welearner_counter->have_posts() ) :
                       while ( $welearner_counter->have_posts()) : $welearner_counter->the_post(); 

                   ?>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-counter-inner">
                            <h2><span class="counter"><?php echo esc_html( get_post_meta( get_the_ID(), 'welearnercounter-number', true ) ); ?></span>+</h2>
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                 <?php endwhile; wp_reset_postdata(); endif; ?>

              </div>
          </div>      
      </section>
