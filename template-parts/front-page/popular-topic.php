<?php
/**
 * template popular topic
 *
 * @package welearner
 */

?>

  <section class="popular-topic-area pd-top-100">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-9 align-self-center">
                            <?php if( !empty( get_theme_mod( 'popular_topic_section_title' ) )  ) : ?>
                            <h2><?php echo esc_html( get_theme_mod( 'popular_topic_section_title' ) ); ?></h2>
                            <?php endif; ?>
                        </div>

                       <?php if( !empty( get_theme_mod( 'popular_topic_show_all_url' ) )  ) : ?>
                            <div class="col-md-3 text-md-right">
                                <a class="btn btn-base-border" href="<?php echo esc_url( get_theme_mod( 'popular_topic_show_all_url' ) ); ?>">
                                    <?php echo esc_html__( 'Show All', 'welearner' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php 
                         $welearner_taxonomy = get_terms( 'course-topic', 'orderby=count&hide_empty=0' );
                         foreach ( $welearner_taxonomy as $term ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                        if( isset( $term->term_id ) ) :
                          $welearner_taxonomy_img = get_term_meta( $term->term_id, 'term_image', true); //taxonomy meta

                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="<?php echo esc_url( get_category_link( $term->term_id ) ); ?>" class="single-popular-topics">
                                <?php if( !empty( $welearner_taxonomy_img ) ) : ?>
                                  <img src="<?php echo esc_url( $welearner_taxonomy_img ); ?>" >
                                <?php endif; ?>
                                <h4> <?php echo esc_html( $term->name ); ?></h4>
                            </a>
                        </div>
                     <?php endif; } ?>

                </div>
            </div>
        </section>
