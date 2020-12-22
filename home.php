<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package welearner
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php 

		//include popular topic
		if( true == get_theme_mod( 'display_popular_topic' ) ) :

     		get_template_part( 'template-parts/front-page/popular-topic' );

     	endif;

     	//include popular topic
		if( true == get_theme_mod( 'display_trending_section' ) ) :

     		get_template_part( 'template-parts/front-page/tranding' );
     		
     	endif;   	

     	//include popular topic
		if( true == get_theme_mod( 'display_top_rated_section' ) ) :

     		get_template_part( 'template-parts/front-page/top-rated' );
     		
     	endif;	

     	//include counter section
		if( true == get_theme_mod( 'display_counter_section' ) ) :

     		get_template_part( 'template-parts/front-page/counter' );
     		
     	endif;

     	//include testimonial section
		if( true == get_theme_mod( 'display_testimonial_section' ) ) :

     		get_template_part( 'template-parts/front-page/testimonial' );
     		
     	endif;    	

     	//include client section
		if( true == get_theme_mod( 'display_client_section' ) ) :

     		get_template_part( 'template-parts/front-page/client' );
     		
     	endif;

		//include team section
		if( true == get_theme_mod( 'display_team_section' ) ) :

     		get_template_part( 'template-parts/front-page/team' );
     		
     	endif;	

     	//include blog section
		if( true == get_theme_mod( 'display_blog_section' ) ) :

     		get_template_part( 'template-parts/front-page/blog' );
     		
     	endif;

		 ?>
		
	    <!--call to action-area star-->
	    <section class="call-to-action-area pd-bottom-100 bg-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="single-call-to-action-inner bg-pink text-center">
	                        <h3>Become an instructor</h3>
	                        <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
	                        <a class="btn button-white" href="#">Get Join</a>
	                    </div>
	                </div>
	                <div class="col-lg-6">
	                    <div class="single-call-to-action-inner bg-light-yellow text-center">
	                        <h3>Become an instructor</h3>
	                        <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
	                        <a class="btn button-white" href="#">Get Join</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!--call to action-area end-->
	     
	</main><!-- #main -->

<?php
get_footer();
