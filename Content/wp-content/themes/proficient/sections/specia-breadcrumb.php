<!--======================================
   BreadCrumb Section
========================================-->
<?php 
$hide_show_breadcrumb= get_theme_mod('hide_show_breadcrumb','on'); 
$breadcrumb_background_setting= get_theme_mod('breadcrumb_background_setting',''); 
$breadcrumb_overlay= get_theme_mod('breadcrumb_overlay','#f6f6f6'); 

if($hide_show_breadcrumb == 'on') :
?>
<section class="breadcrumb" style="background: url('<?php echo esc_url($breadcrumb_background_setting); ?>') repeat;">
    <div class="background-overlay" style=" background: <?php echo esc_attr($breadcrumb_overlay); ?>;">
        <div class="container">
            <div class="row padding-top-30 padding-bottom-30">
                <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                    <h2>
						<?php 
							if ( is_day() ) : 
							
								printf( __( 'Daily Archives: %s', 'proficient' ), get_the_date() );
							
							elseif ( is_month() ) :
							
								printf( __( 'Monthly Archives: %s', 'proficient' ), (get_the_date( 'F Y' ) ));
								
							elseif ( is_year() ) :
							
								printf( __( 'Yearly Archives: %s', 'proficient' ), (get_the_date( 'Y' ) ) );
								
							elseif ( is_category() ) :
							
								printf( __( 'Category Archives: %s', 'proficient' ), (single_cat_title( '', false ) ));

							elseif ( is_tag() ) :
							
								printf( __( 'Tag Archives: %s', 'proficient' ), (single_tag_title( '', false ) ));
								
							elseif ( is_404() ) :
						
								printf( __( 'Error 404', 'proficient' ));
								
							elseif ( is_author() ) :
							
								printf( __( 'Author: %s', 'proficient' ), (get_the_author( '', false ) ));		
							
							elseif ( is_tax( 'portfolio_categories' ) ) :
						
								printf( __( 'Portfolio Categories: %s', 'proficient' ), (single_term_title( '', false ) ));	
								
							elseif ( is_tax( 'pricing_categories' ) ) :
					
								printf( __( 'Pricing Categories: %s', 'proficient' ), (single_term_title( '', false ) ));	
								
							elseif ( class_exists( 'WooCommerce' ) ) : 
								
								if ( is_shop() ) {
									woocommerce_page_title();
								}
								
								elseif ( is_cart() ) {
									the_title();
								}
								
								elseif ( is_checkout() ) {
									the_title();
								}
								
								else {
									the_title();
								}
							else :
									the_title();
									
							endif;
							
						?>
					</h2>
                </div>
		
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
<?php 
endif;
?>