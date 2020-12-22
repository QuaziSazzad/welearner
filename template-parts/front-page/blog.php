<?php
/**
 * template blog
 *
 * @package welearner
 */

?>
    <!--blog-area start-->
      <section class="blog-area bg-gray pd-top-60 pd-bottom-60 bg-sky-blue">
          <div class="container">
              <?php if( !empty(  get_theme_mod( 'blog_title' ) ) ) : ?>
                <div class="section-title">
                    <h2><?php echo wp_kses( get_theme_mod( 'blog_title' ), array( 'br'=>array() ) ); ?></h2>
                </div>
                <?php endif; ?>
              <div class="row">
                <?php
                   $welearner_team = new \WP_Query(array(  
                   'post_type' =>  'post',
                   'posts_per_page'=> 3
                    )  );  
                    if ( $welearner_team->have_posts() ) :
                     while ( $welearner_team->have_posts()) : $welearner_team->the_post(); 
                 ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-inner">
                          <?php if( has_post_thumbnail() ) : ?>
                              <div class="thumb">
                                 <?php the_post_thumbnail( 'welearner-blog' ); ?>
                              </div>
                          <?php endif; ?>
                            <div class="blog-details">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <a class="read-more" href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read Blog', 'welearner' ); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>

              </div>
          </div>
      </section>
      <!--blog-area end-->