<?php
function specia_premium_setting( $wp_customize ) {
	
/*=========================================
	Premium Theme Details Page
	=========================================*/

	/*=========================================
	Page Layout Settings Section
	=========================================*/
	$wp_customize->add_section(
        'upgrade_premium',
        array(
            'title' 		=> __('Upgrade to Premium','specia'),
            'description' 	=>'',
		)
    );
	
	/*=========================================
	Add Buttons
	=========================================*/
	
	class WP_Button_Customize_Control extends WP_Customize_Control {
	public $type = 'upgrade_premium';

	   function render_content() {
		?>
			<div class="premium_info">
				<ul>
					<li><a href="https://demo.speciatheme.com/pro/?theme=specia" class="btn-green" target="_blank"><i class="dashicons dashicons-desktop info-icon"></i><?php _e( 'Premium Demo','specia' ); ?> </a></li>
					
					<li><a href="themes.php?page=specia-theme-info#specia" class="btn-green"><i class="dashicons dashicons-visibility"></i><?php _e( 'View Details','specia' ); ?> </a></li>
					
					<li><a href="https://speciatheme.com/specia-premium-wordpress-theme/" class="btn-red" target="_blank"><i class="dashicons dashicons-cart"></i><?php _e( 'Buy Now','specia' ); ?> </a></li>
					
					<li><a href="https://specia.ticksy.com/" class="btn-green" target="_blank"><i class="dashicons dashicons-sos"></i><?php _e( 'Support Center','specia' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
	$wp_customize->add_setting(
		'premium_info_buttons',
		array(
		   'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)	
	);
	
	$wp_customize->add_control( new WP_Button_Customize_Control( $wp_customize, 'premium_info_buttons', array(
		'section' => 'upgrade_premium',
		'setting' => 'premium_info_buttons',
    ))
);
}
add_action( 'customize_register', 'specia_premium_setting' );
?>