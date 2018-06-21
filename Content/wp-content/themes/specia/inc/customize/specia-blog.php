<?php
function specia_blog_setting( $wp_customize ) {

	/*=========================================
	Blog Section Panel
	=========================================*/
	$wp_customize->add_panel( 
		'blog_panel', 
		array(
			'priority'      => 128,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Blog Section', 'specia'),
		) 
	);
	
	// Blog Settings Section // 
	$wp_customize->add_section(
        'blog_setting',
        array(
        	'priority'      => 1,
            'title' 		=> __('Settings','specia'),
			'panel'  		=> 'blog_panel',
		)
    );
	
	$wp_customize->add_setting( 
		'hide_show_blog' , 
			array(
			'default' => __( 'on', 'specia' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_select',
		) 
	);
	
	$wp_customize->add_control(
		'hide_show_blog' , 
		array(
			'label'          => __( 'Hide / Show Section', 'specia' ),
			'section'        => 'blog_setting',
			'settings'   	 => 'hide_show_blog',
			'type'           => 'radio',
			'choices'        => 
			array(
				'on' => __( 'Show', 'specia' ),
				'off' => __( 'Hide', 'specia' )
			) 
		) 
	);
	
	// Blog Header Section // 
	$wp_customize->add_section(
        'blog_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Header','specia'),
			'panel'  		=> 'blog_panel',
		)
    );
	
	// Blog Title // 
	$wp_customize->add_setting(
    	'blog_title',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'blog_title',
		array(
		    'label'   => __('Section Title','specia'),
		    'section' => 'blog_header',
			'settings'   	 => 'blog_title',
			'type'           => 'text',
		)  
	);
	
	// Blog Description // 
	$wp_customize->add_setting(
    	'blog_description',
    	array(
	        'default'			=> '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);	
	
	$wp_customize->add_control( 
		'blog_description',
		array(
		    'label'   => __('Section Description','specia'),
		    'section' => 'blog_header',
			'settings'   	 => 'blog_description',
			'type'           => 'textarea',
		)  
	);
	
	// Blog Content Section // 
	$wp_customize->add_section(
        'blog_content',
        array(
        	'priority'      => 3,
            'title' 		=> __('Content','specia'),
			'panel'  		=> 'blog_panel',
		)
    );
	
	// Blog Display Setting // 
	$wp_customize->add_setting(
    	'blog_display_num',
    	array(
	        'default'			=> __('3','specia'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);	

	$wp_customize->add_control( 
		'blog_display_num',
		array(
		    'label'   		=> __('Posts Display','specia'),
		    'section' 		=> 'blog_content',
			'settings'   	 => 'blog_display_num',
			'type' 			=> 'select',
			'description'   => __( 'No. of Post Display in a Single Row', 'specia' ),
			'choices'        => 
			array(
				'3' => __( '3', 'specia' ),
				'6' => __( '6', 'specia' ),
				'9' => __( '9', 'specia' )
				
			) 
		)  
	);
		
}

add_action( 'customize_register', 'specia_blog_setting' );
?>