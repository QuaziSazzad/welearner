<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package welearner
 */

?>
	   <footer class="footer-area pd-top-100" style="background: url(<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/other/1.png);">
        <div class="container">
            <div class="row">
                <?php 
                     if ( is_active_sidebar( 'footer-widget-1' ) ): //footer widget activity check 
                            dynamic_sidebar( 'footer-widget-1' );
                     endif;  
                     if ( is_active_sidebar( 'footer-widget-2' ) ): //footer widget activity check 
                            dynamic_sidebar( 'footer-widget-2' );
                     endif;  
                     if ( is_active_sidebar( 'footer-widget-3' ) ): //footer widget activity check 
                            dynamic_sidebar( 'footer-widget-3' );
                     endif;  
                     if ( is_active_sidebar( 'footer-widget-4' ) ): //footer widget activity check 
                            dynamic_sidebar( 'footer-widget-4' );
                     endif; 
                      if ( is_active_sidebar( 'footer-widget-5' ) ): //footer widget activity check 
                            dynamic_sidebar( 'footer-widget-5' );
                     endif; 
                 ?>
    
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
