<?php

/*
 * Theme Customize Options
 * @package welearner
 * @since 1.0.0
 * */


//banner section
function welearner_banner_option($wp_customize) 
{
	$wp_customize->add_section("welearner_banner_section", array(
		"title" => __("Banner Option", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("banner_title", array(
		"default" => esc_html__( 'Discover a new way of learning', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',

	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"banner_title",
		array(
			"label" => __("Banener Title", "welearner"),
			"section" => "welearner_banner_section",
			"settings" => "banner_title",
			"type" => "text",
		)
	));

	$wp_customize->add_setting("banner_sub_title", array(
		"default" => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque.', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"banner_sub_title",
		array(
			"label" => __("Banner Sub Title", "welearner"),
			"section" => "welearner_banner_section",
			"settings" => "banner_sub_title",
			"type" => "textarea",
		)
	));

	$wp_customize->add_setting("banner_image", array(
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_url',
	));

	  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_one_control', array(
        'label'             => __('Banner Image', 'welearner'),
        "section" => "welearner_banner_section",
		"settings" => "banner_image",    
    )));

}

add_action("customize_register","welearner_banner_option");

/*
 * popular topic section
*/
function welearner_popular_topic_option($wp_customize) 
{
	$wp_customize->add_section("welearner_popular_topic_section", array(
		"title" => __("Popular Topic", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_popular_topic", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_popular_topic",
		array(
			"label" => __("Is display Popular Topic Section ?", "welearner"),
			"section" => "welearner_popular_topic_section",
			"settings" => "display_popular_topic",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("popular_topic_section_title", array(
		"default" => esc_html__( 'Popular Topics', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"popular_topic_section_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_popular_topic_section",
			"settings" => "popular_topic_section_title",
			"type" => "text",
		)
	));

	$wp_customize->add_setting("popular_topic_show_all_url", array(
		"default" => '#',
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_url',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"popular_topic_show_all_url",
		array(
			"label" => __("Show All Url", "welearner"),
			"section" => "welearner_popular_topic_section",
			"settings" => "popular_topic_show_all_url",
			"type" => "text",
		)
	));

}

add_action("customize_register","welearner_popular_topic_option");


/*
 * tranding section
*/
function welearner_tranding_option($wp_customize) 
{
	$wp_customize->add_section("welearner_tranding_section", array(
		"title" => __("Tranding", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_trending_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',

	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_trending_section",
		array(
			"label" => __("Is display Tranding Section ?", "welearner"),
			"section" => "welearner_tranding_section",
			"settings" => "display_trending_section",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("tranding_section_title", array(
		"default" => esc_html__( 'Tranding', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"tranding_section_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_tranding_section",
			"settings" => "tranding_section_title",
			"type" => "text",
		)
	));

	$wp_customize->add_setting("tranding_show_all_url", array(
		"default" => '#',
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_url',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"tranding_show_all_url",
		array(
			"label" => __("Show All Url", "welearner"),
			"section" => "welearner_tranding_section",
			"settings" => "tranding_show_all_url",
			"type" => "text",
		)
	));

}

add_action("customize_register","welearner_tranding_option");

/*
 * top rated section
*/
function welearner_top_rated_option($wp_customize) 
{
	$wp_customize->add_section("welearner_top_rated_section", array(
		"title" => __("Top Rated", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_top_rated_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_top_rated_section",
		array(
			"label" => __("Is display Tranding Section ?", "welearner"),
			"section" => "welearner_top_rated_section",
			"settings" => "display_top_rated_section",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("tranding_top_rated_title", array(
		"default" => esc_html__( 'Top Rated', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"tranding_top_rated_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_top_rated_section",
			"settings" => "tranding_top_rated_title",
			"type" => "text",
		)
	));

	$wp_customize->add_setting("top_rated_show_all_url", array(
		"default" => '#',
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_url',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"top_rated_show_all_url",
		array(
			"label" => __("Show All Url", "welearner"),
			"section" => "welearner_top_rated_section",
			"settings" => "top_rated_show_all_url",
			"type" => "text",
		)
	));

}

add_action("customize_register","welearner_top_rated_option");


/*
 * counter section
*/
function welearner_counter_option($wp_customize) 
{
	$wp_customize->add_section("welearner_counter_section", array(
		"title" => __("Counter", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_counter_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_counter_section",
		array(
			"label" => __("Is display Counter Section ?", "welearner"),
			"section" => "welearner_counter_section",
			"settings" => "display_counter_section",
			"type" => "checkbox",
		)
	));


}

add_action("customize_register","welearner_counter_option");

/*
* testimonial
*/

function welearner_testimonial_option($wp_customize) 
{
	$wp_customize->add_section("welearner_testimonial_section", array(
		"title" => __("Testimonial", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_testimonial_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_testimonial_section",
		array(
			"label" => __("Is display Testimonial Section ?", "welearner"),
			"section" => "welearner_testimonial_section",
			"settings" => "display_testimonial_section",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("testimonial_title", array(
		"default" => esc_html__( 'What our students have to say', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"testimonial_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_testimonial_section",
			"settings" => "testimonial_title",
			"type" => "text",
		)
	));

	$wp_customize->add_setting("testimonial_content", array(
		"default" => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"testimonial_content",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_testimonial_section",
			"settings" => "testimonial_content",
			"type" => "textarea",
		)
	));


}

add_action("customize_register","welearner_testimonial_option");


/*
* Client
*/

function welearner_client_option($wp_customize) 
{
	$wp_customize->add_section("welearner_client_section", array(
		"title" => __("Client", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_client_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_client_section",
		array(
			"label" => __("Is display Client Section ?", "welearner"),
			"section" => "welearner_client_section",
			"settings" => "display_client_section",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("client_title", array(
		"default" => esc_html__( 'Trusted by content creators across the world', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"client_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_client_section",
			"settings" => "client_title",
			"type" => "textarea",
		)
	));



}

add_action("customize_register","welearner_client_option");

/*
* team
*/

function welearner_team_option($wp_customize) 
{
	$wp_customize->add_section("welearner_team_section", array(
		"title" => __("Team", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_team_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_team_section",
		array(
			"label" => __("Is display Team Section ?", "welearner"),
			"section" => "welearner_team_section",
			"settings" => "display_team_section",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("team_title", array(
		"default" => wp_kses( __( 'Our Popular <br> Creator', 'welearner' ), array( 'br'=>array() ) ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"team_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_team_section",
			"settings" => "team_title",
			"type" => "text",
		)
	));

	$wp_customize->add_setting("team_sub_title", array(
		"default" => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel', 'welearner' ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"team_sub_title",
		array(
			"label" => __("Section Sub Title", "welearner"),
			"section" => "welearner_team_section",
			"settings" => "team_sub_title",
			"type" => "textarea",
		)
	));


}

add_action("customize_register","welearner_team_option");

/*
* blog
*/

function welearner_blog_option($wp_customize) 
{
	$wp_customize->add_section("welearner_blog_section", array(
		"title" => __("Blog", "welearner"),
		"priority" => 30,
	));

	$wp_customize->add_setting("display_blog_section", array(
		"default" =>true,
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"display_blog_section",
		array(
			"label" => __("Is display Blog Section ?", "welearner"),
			"section" => "welearner_blog_section",
			"settings" => "display_blog_section",
			"type" => "checkbox",
		)
	));

	$wp_customize->add_setting("blog_title", array(
		"default" => wp_kses( __( 'Learning <br> Support features', 'welearner' ), array( 'br'=>array() ) ),
		"transport" => "refresh",
		'sanitize_callback'  => 'esc_html',
	));



	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"blog_title",
		array(
			"label" => __("Section Title", "welearner"),
			"section" => "welearner_blog_section",
			"settings" => "blog_title",
			"type" => "text",
		)
	));



}

add_action("customize_register","welearner_blog_option");