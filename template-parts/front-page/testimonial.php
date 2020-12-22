<?php
/**
 * template testimonial
 *
 * @package welearner
 */

?>

      <!-- testimonial-area start -->
      <section class="testimonial-area bg-gray pd-top-90">
          <div class="container">
              <div class="section-title">
                  <div class="row">
                      <?php if( !empty( get_theme_mod( 'testimonial_title' ) ) ) : ?>
                          <div class="col-lg-5">
                              <h2><?php echo esc_html( get_theme_mod( 'testimonial_title' ) ); ?></h2>
                          </div>
                      <?php endif; ?>
                      <?php if( !empty( get_theme_mod( 'testimonial_title' ) ) ) : ?>
                        <div class="col-lg-6 offset-lg-1 align-self-center">
                            <h5 class="quote mt-3 mt-md-0">
                               <?php echo esc_html( get_theme_mod( 'testimonial_content' ) ); ?>
                            </h5>
                        </div>
                      <?php endif; ?>
                  </div>
              </div>
              <div class="testimonial-slider owl-carousel">
                <?php
                   $welearner_testimonial = new \WP_Query(array(  
                   'post_type' =>  'testimonial',
                    )  );  
                    if ( $welearner_testimonial->have_posts() ) :
                     while ( $welearner_testimonial->have_posts()) : $welearner_testimonial->the_post(); 
                 ?>
                    <div class="item">
                        <div class="single-testimonial-inner">
                          <?php if( has_post_thumbnail(  ) ) : ?>
                              <div class="thumb">
                                  <?php the_post_thumbnail( 'welearner-testimonial' ); ?>
                              </div>
                          <?php endif; ?>
                            <div class="details">
                                <h5><?php the_title(); ?></h5>
                                <span><?php echo esc_html( get_post_meta( get_the_ID(), 'welearnerdesignation', true ) ); ?></span>
                                <p><?php the_content(); ?></p>
                                <h6><?php echo esc_html( get_post_meta( get_the_ID(), 'welearnertestimonial', true ) ); ?> </h6>
                            </div>
                        </div>
                    </div>
                 <?php endwhile; wp_reset_postdata(); endif; ?>

              </div>
          </div>
      </section>
      <!-- testimonial-area end -->