<?php
/**
 * template menu
 *
 * @package welearner
 */

?>

<div class="navbar-area">
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">

            <div class="logo">

                <?php 
                //logo
                if ( has_custom_logo() ){ 
                    the_custom_logo();
                 }else{ 

                 printf('<a href="%1$s">%2$s</a>',esc_url(site_url('/')),esc_html(get_bloginfo('name')));

                } ?>
            </div>

            <div class="nav-right-part nav-right-part-mobile">
                <?php
                  //mobile menu
                   if ( has_nav_menu( 'menu-1' ) ){  
                            wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'items_wrap'      => '<ul class="">%3$s</ul>',
                            'container'      =>'',
                            'container_class' => '',
                            'menu_class'      => 'menu',
                            ) ); 
                } ?>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                  <?php
                  //desktop menu
                   if ( has_nav_menu( 'menu-1' ) ){  
                            wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'items_wrap'      => '<ul class="">%3$s</ul>',
                            'container'      =>'',
                            'container_class' => '',
                            'menu_class'      => 'menu',
                            ) ); 
                } ?>

            </div>
        </div>
    </nav>
</div>