<?php
/**
 * template Tranding
 *
 * @package welearner
 */

?>

    <!-- Tranding -->
      <section class="tranding-area pd-top-60">
        <div class="container">
            <div class="section-title">
                <div class="row">
                  <?php if( !empty( get_theme_mod( 'tranding_section_title' ) ) ) : ?>
                    <div class="col-md-9 align-self-center">
                        <h2><?php echo esc_html( get_theme_mod( 'tranding_section_title' ) ); ?></h2>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty(  get_theme_mod( 'tranding_show_all_url' ) ) ) : ?>
                    <div class="col-md-3 text-md-right">
                        <a class="btn btn-base-border" href="<?php echo esc_url( get_theme_mod( 'tranding_show_all_url' ) ); ?>"><?php echo esc_html__( 'Show All', 'welearner' ) ?> </a>
                    </div>
                  <?php endif; ?>
                </div>
            </div>
            <div class="row justify-content-center">
                 <?php
                     $welearner_trending_courses = new \WP_Query(array(  
                     'post_type' =>  'courses',  
                      )  );  
                      if ( $welearner_trending_courses->have_posts() ) :
                       while ( $welearner_trending_courses->have_posts()) : $welearner_trending_courses->the_post(); 

                        $welearner_taxonomy =  get_the_terms( $post->ID , 'course-topic' );
                   ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post-inner">
                          <?php if( has_post_thumbnail() ) : ?>
                            <div class="thumb">
                                <?php the_post_thumbnail( 'welearner-course' ); ?>
                            </div>
                           <?php endif; ?>
                            <div class="details">
                                <?php 
                                     if( is_array( $welearner_taxonomy ) ) : 
                                      foreach ( $welearner_taxonomy as $term ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                                        $term_link = get_term_link( $term, 'course-topic' );
                                        if( is_wp_error( $term_link ) )
                                        continue;
                                         ?>
                                        <a href="<?php echo esc_url( $term_link ); ?>" class="<?php echo esc_attr(str_replace(' ', '', $term->name ));  ?>"><?php echo esc_html( $term->name );  ?></a>
                                    <?php } endif; 
                                ?>
                                <?php echo ic_get_reviews_average_html() ?>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="author">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 27 ); ?>
                                    <span><?php the_author(); ?></span>
                                </div>
                                <div class="post-footer">
                                    <del><?php echo esc_html( get_post_meta( get_the_id(), 'welearnerregular-price', true ) ); //regular price ?></del>
                                    <span><?php echo esc_html( get_post_meta( get_the_id(), 'welearnerdiscounted-price', true ) ); //discounted price ?></span>
                                    <a class="btn btn-base-border float-right" 
                                     href="<?php echo esc_url( get_post_meta( get_the_id(), 'welearnerpreview-url', true ) ); ?>">
                                     <?php echo esc_html__( 'Watch Preview', 'welearner' ); ?>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>        
     </section>
