<?php
    if ( ! function_exists( 'welearner_dynamic_styles' ) ) {
      
    function welearner_dynamic_styles() {

     ob_start(); 


   $welearner_taxonomy = get_terms( 'course-topic', 'orderby=count&hide_empty=0' );
   foreach ( $welearner_taxonomy as $term ) {
 
    $welearner_cat_color = get_term_meta( $term->term_id, 'wlrmetacolor', true); //color
    $welearner_cat_bg = get_term_meta( $term->term_id, 'wlrmetabgcolor', true); //color
    ?>

    .<?php echo esc_attr(str_replace(' ', '', $term->name )); ?> {
        background: <?php echo sanitize_hex_color( $welearner_cat_bg ); ?>;
        color: <?php echo sanitize_hex_color( $welearner_cat_color ); ?>;
        height: 28px;
        line-height: 29px;
        padding: 0 18px;
        display: inline-block;
        border-radius: 30px;
    }

    <?php  } ?>

    <?php 


    $output = ob_get_clean();

    return $output;
     } //end  welearner_dynamic_styles

    } //endif 
       


function welearner_style_method() {

      $custom_css = welearner_dynamic_styles();

      wp_add_inline_style( 'welearner-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'welearner_style_method' );



   