<?php
function proficient_premium_setting( $wp_customize ) {

	$wp_customize->add_section(
        'upgrade_premium',
        array(
            'title' 		=> __('Upgrade to Premium','proficient'),
            'description' 	=>'',
		)
    );
	
	/*=========================================
	Buttons
	=========================================*/
	
	class WP_Buttons_Customize_Control extends WP_Customize_Control {
	public $type = 'upgrade_premium';

	   function render_content() {
		?>
			<div class="premium_info">
				<ul>
					<li><a href="https://demo.speciatheme.com/pro/?theme=proficient" class="btn-green" target="_blank"><i class="dashicons dashicons-desktop info-icon"></i><?php _e( 'Premium Demo','proficient' ); ?> </a></li>
					
					<li><a href="themes.php?page=specia-theme-info#proficient" class="btn-green"><i class="dashicons dashicons-visibility"></i><?php _e( 'View Details','proficient' ); ?> </a></li>
					
					<li><a href="https://speciatheme.com/proficient-premium-wordpress-theme/" class="btn-red" target="_blank"><i class="dashicons dashicons-cart"></i><?php _e( 'Buy Now','proficient' ); ?> </a></li>
					
					<li><a href="http://specia.ticksy.com/" class="btn-green" target="_blank"><i class="dashicons dashicons-sos"></i><?php _e( 'Support Center','proficient' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
		$wp_customize->add_setting(
			'premium_info_buttons',
			array(
			   'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'proficient_sanitize_text',
			)	
		);
	
		$wp_customize->add_control( new WP_Buttons_Customize_Control( $wp_customize, 'premium_info_buttons', array(
				'section' => 'upgrade_premium',
				'setting' => 'premium_info_buttons',
			))
		);
}
add_action( 'customize_register', 'proficient_premium_setting',999 );
?>