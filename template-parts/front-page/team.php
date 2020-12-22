<?php
/**
 * template team
 *
 * @package welearner
 */

?>

      <section class="team-area bg-gray pd-top-100">
          <div class="container">
              <div class="section-title text-center">
                <?php if( !empty( get_theme_mod( 'team_title' ) ) ) : ?>
                  <h2><?php echo wp_kses_post( get_theme_mod( 'team_title' ), array( 'br'=>array() ) ); ?></h2>
                <?php endif; ?>
                <?php if( !empty( get_theme_mod( 'team_sub_title' ) ) ) : ?>
                  <p class="mt-3"><?php echo esc_html(  get_theme_mod( 'team_sub_title' ) ); ?></p>
                 <?php endif; ?> 
              </div>
              <div class="team-slider owl-carousel">
                <?php
                   $welearner_team = new \WP_Query(array(  
                   'post_type' =>  'team',
                   'posts_per_page'=> 4
                    )  );  
                    if ( $welearner_team->have_posts() ) :
                     while ( $welearner_team->have_posts()) : $welearner_team->the_post(); 
                 ?>
                    <div class="item">
                        <div class="single-team-inner">
                            <div class="thumb">
                              <?php if( has_post_thumbnail() ): ?>
                                  <?php the_post_thumbnail( 'welearner-team' ); ?>
                              <?php endif; ?>
                                <ul style="background: url(<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/team/shape.png);">
                                    <li><a href="<?php echo esc_url(  get_post_meta( get_the_ID(), 'welearnerfacebook-profile', true ) ); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo esc_url(  get_post_meta( get_the_ID(), 'welearnertwitter-profile', true ) ); ?>"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="<?php echo esc_url(  get_post_meta( get_the_ID(), 'welearnerpinterest-profile', true ) ); ?>"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="details">
                                <h5><?php the_title(); ?></h5>
                                <span><?php echo esc_html(  get_post_meta( get_the_ID(), 'welearnerdesignation', true ) ); ?></span>
                            </div>
                        </div>
                    </div>
                   <?php endwhile; wp_reset_postdata(); endif; ?>
              </div>
          </div>
      </section>