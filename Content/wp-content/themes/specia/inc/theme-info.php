<?php defined( 'ABSPATH' ) or die;

/*
 * Admin settings
 */

class Specia_admin {

    // Loads scripts and styles for admin settings page
    public static function scripts_and_styles ( $page ) {
        if ( 'appearance_page_' . 'specia-theme-info' === $page ) {
            wp_enqueue_script( 'jquery-ui-tabs' );
            wp_enqueue_script( 'specia-theme-admin', get_template_directory_uri() . '/js/specia-theme-admin.js', array( 'jquery' ) );
            wp_enqueue_style( 'specia-theme-admin-css', get_template_directory_uri() . '/css/specia-theme-admin.css' );
        }
    }

    // Admin settings page
    public static function settings_page () { ?>
        <div class="wrap">

            <div id="<?php echo 'specia-theme-info-form'; ?>">
               

                <div id="tabs">
                    <ul class="tabs-ul">
                        <li><a href="#specia"><?php _e( 'Specia Theme', 'specia' ); ?></a></li>
                        <li><a href="#proficient"><?php _e( 'Proficient Theme', 'specia' ); ?></a></li>
						<li><a href="#avira"><?php _e( 'Avira Theme', 'specia' ); ?></a></li>
                    </ul>

                    <div id="specia" class="tab-item">
						
						
						<!-- Section One -->
						<section class="section-one">
							<div id="container" class="cf">
							
								<div class="span7">
									<img class="theme_screen" src="<?php echo get_template_directory_uri(); ?>/images/specia.png">
								</div>
								
								<div class="span5">
									<h1><?php _e('Specia Premium WordPress Theme' ,'specia'); ?></h1>
									<p><?php _e('Specia is a Multipurpose WordPress theme with lots of powerful features, instantly giving a professional look to your online presence. Well suited for any type of websites - business, portfolio, food & restaurant, gym & fitness, spa salon, medical practitioner & hospitals, landing pages, product pages, corporate business, digital agency, product showcase, photography, personal, real estate and eCommerce stores.' ,'specia'); ?></p>
									
									<div class="promo-buttons">
										<a href="<?php echo 'http://demo.speciatheme.com/pro/?theme=specia'; ?>" class="promo-btn btn-black" target="_blank"><i class="dashicons dashicons-desktop info-icon"></i> <?php _e('Premium Demo','specia'); ?></a>
										
										<a href="<?php echo 'https://speciatheme.com/specia-premium-wordpress-theme/'; ?>" class="promo-btn btn-red" target="_blank"><i class="dashicons dashicons-cart info-icon"></i> <?php _e('Buy Premium','specia'); ?></a>
									</div>
						
								</div>
							</div>
						</section>
						<!-- /Section One -->
						
						<!-- Section Two -->
						<section class="section-two" style="background: url('<?php echo get_template_directory_uri(); ?>/images/features.jpg') no-repeat fixed 0 0 / cover;">
							<div class="section_overlay">
								
								<h1><?php _e('Why Choose Specia Premium?' ,'specia'); ?></h1>
								<div class="features">
									<div class="block"><?php _e('Responsive Design' ,'specia'); ?></div>
									<div class="block"><?php _e('Browser Compatibility' ,'specia'); ?></div>
									<div class="block"><?php _e('Translation Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('WPML & Polylang Plugin Supports' ,'specia'); ?></div>
									<div class="block"><?php _e('WooCommerce Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('Contact Form 7 Plugin Supports' ,'specia'); ?></div>
									<div class="block"><?php _e('Ninja Form Support' ,'specia'); ?></div>
									<div class="block"><?php _e('12 Page Templates' ,'specia'); ?></div>
									<div class="block"><?php _e('Custom Widget' ,'specia'); ?></div>
									<div class="block"><?php _e('Section Order Manager' ,'specia'); ?></div>
									<div class="block"><?php _e('Style Configuration' ,'specia'); ?></div>
									<div class="block"><?php _e('Wide & Boxed Layout' ,'specia'); ?></div>
									<div class="block"><?php _e('Google Maps' ,'specia'); ?></div>
									<div class="block"><?php _e('Editable Post Slug' ,'specia'); ?></div>
									<div class="block"><?php _e('Prebuilt Theme Color' ,'specia'); ?></div>
									<div class="block"><?php _e('Social Media Integration' ,'specia'); ?></div>
									<div class="block"><?php _e('Unlimited Colors' ,'specia'); ?></div>
									<div class="block"><?php _e('Background Patterns' ,'specia'); ?></div>
									<div class="block"><?php _e('Filterable Portfolio' ,'specia'); ?></div>
									<div class="block"><?php _e('Custom Sidebars' ,'specia'); ?></div>
									<div class="block"><?php _e('Sticky Header' ,'specia'); ?></div>
									<div class="block"><?php _e('Section Order Manager' ,'specia'); ?></div>
									<div class="block"><?php _e('Footer Copyright Editor' ,'specia'); ?></div>
									<div class="block"><?php _e('Blog Paginations' ,'specia'); ?></div>
									<div class="block"><?php _e('Breadcrumbs Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('Extensive Documentation' ,'specia'); ?></div>
									<div class="block"><?php _e('Awesome Support' ,'specia'); ?></div>
									<div class="block"><?php _e('4 Column Footer' ,'specia'); ?></div>
								</div>
							</div>
						</section>
						<!-- /Section Two -->
						
						<!-- Section Three -->
						<section class="section-three">
							<table>
								<colgroup></colgroup>
								<colgroup></colgroup>
								<colgroup></colgroup>
								<colgroup></colgroup>

								<thead>
									<tr>
										<th>&nbsp;</th>
										<th>
											<h2><?php _e('Free' ,'specia'); ?></h2>
											<p></p>
										</th>
										<th>
											<h2><?php _e('Premium' ,'specia'); ?></h2>
											<p class="promo"><?php _e('Enhance your website with premium version' ,'specia'); ?></p>
										</th>
									</tr>
								</thead>

								<tfoot>
									<tr>
										<th>&nbsp;</th>
										<td><a href="<?php echo 'https://wordpress.org/themes/specia/'; ?>" class="buy-btn btn-green" target="_blank"><i class="dashicons dashicons-download"></i> <?php _e('Free Download','specia'); ?></a></td>
										<td><a href="<?php echo 'https://speciatheme.com/specia-premium-wordpress-theme/'; ?>" class="buy-btn btn-red" target="_blank"><i class="dashicons dashicons-cart"></i> <?php _e('Buy Specia Now','specia'); ?></a></td>
									</tr>
								</tfoot>

								<tbody>
									<tr>
										<th><?php echo sprintf(__("Header Soical Icons & Contact Info","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Logo & Favicon","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Touch & Swipe Slider","specia")); ?></th>
										<td><?php echo sprintf(__("<b>3</b> Slides","specia")); ?></td>
										<td><?php echo sprintf(__("<b>Unlimited Slides</b> with more features","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Call to Action","specia")); ?></th>
										<td><?php echo sprintf(__("<b>1 Animation</b> with background color","specia")); ?></td>
										<td><?php echo sprintf(__("<b>5 Animation</b> with Custom Buttons","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Service Section","specia")); ?></th>
										<td><b><?php _e('3 Services' ,'specia'); ?></b></td>
										<td><?php echo sprintf(__("<b>Unlimited</b> Services (Icons & Image) with <b>Own Link</b>","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Features Section","specia")); ?></th>
										<td><b><?php _e('With background color' ,'specia'); ?></b></td>
										<td><b><?php _e('With background color and background image' ,'specia'); ?></b></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Portfolio Section","specia")); ?></th>
										<td></i><b><?php _e('3 Portfolio' ,'specia'); ?></b></td>
										<td><?php echo sprintf(__("<b>Unlimited Portfolio</b>","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("WooCommerce Compatibility","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Translation Ready","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Testimonial Section","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Client/Sponsor Section","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Filterable Portfolio","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Attractive Blog Pages","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("WPML & Polylang Support","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Section Order Manager","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom About Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									<tr>
										<th><?php echo sprintf(__("Custom Service Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Pricing Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Preset Background & Colors","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Website Layouts","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Breadcrumbs</span>","specia")); ?></th>
										<td><?php _e('Fixed Background Color' ,'specia'); ?></td>
										<td><?php _e('Background Color & Background Image' ,'specia'); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Photo Gallery</span>","specia")); ?></th>
										<td><?php _e('Core Gallery Support' ,'specia'); ?></td>
										<td><?php echo sprintf(__("<b>Jetpack</b> Gallery Support","specia")); ?>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Page Template","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Awesome Fast Support","specia")); ?></th>
										<td><?php echo sprintf(__("<b>Free</b> <a href='https://specia.ticksy.com/' target='_blank'>Help Desk</a>","specia")); ?></td>
										<td><?php echo sprintf(__("<b>Premium</b> <a href='https://specia.ticksy.com/' target='_blank'>Help Desk</a></i></a>","specia")); ?></td>
									</tr>
								</tbody>

							</table>
						</section>
	
                    </div>

                    <div id="proficient" class="tab-item">
                        <!-- Section One -->
						<section class="section-one">
							<div id="container" class="cf">
							
								<div class="span7">
									<img class="theme_screen" src="<?php echo get_template_directory_uri(); ?>/images/proficient.png">
								</div>
								
								<div class="span5">
									<h1><?php _e('Proficient Premium WordPress Theme' ,'specia'); ?></h1>
									<p><?php _e('Proficient is the right theme for you if you are looking for a multipurpose theme that can handle everything you throw at it. It is perfect for business themes, marketing, corporate startup, agency, blog, business, company, corporate, creative, portfolio, professional and more. The design is easy to change and adapt to the client needs. The theme has all the modern functionality such as: slider, services, blogs and much more.' ,'specia'); ?></p>
									
									<div class="promo-buttons">
										<a href="<?php echo 'http://demo.speciatheme.com/pro/?theme=proficient'; ?>" class="promo-btn btn-black" target="_blank"><i class="dashicons dashicons-desktop info-icon"></i> <?php _e('Premium Demo','specia'); ?></a>
										
										<a href="<?php echo 'https://speciatheme.com/proficient-premium-wordpress-theme/'; ?>" class="promo-btn btn-red" target="_blank"><i class="dashicons dashicons-cart info-icon"></i> <?php _e('Buy Premium','specia'); ?></a>
									</div>
						
								</div>
							</div>
						</section>
						<!-- /Section One -->
						
						<!-- Section Two -->
						<section class="section-two" style="background: url('<?php echo get_template_directory_uri(); ?>/images/features.jpg') no-repeat fixed 0 0 / cover;">
							<div class="section_overlay">
								
								<h1><?php _e('Why Choose Proficient Premium?' ,'specia'); ?></h1>
								<div class="features">
									<div class="block"><?php _e('Responsive Design' ,'specia'); ?></div>
									<div class="block"><?php _e('Browser Compatibility' ,'specia'); ?></div>
									<div class="block"><?php _e('Translation Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('WPML & Polylang Supports' ,'specia'); ?></div>
									<div class="block"><?php _e('WooCommerce Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('Contact Form 7 Supports' ,'specia'); ?></div>
									<div class="block"><?php _e('Ninja Form Support' ,'specia'); ?></div>
									<div class="block"><?php _e('12 Page Templates' ,'specia'); ?></div>
									<div class="block"><?php _e('Custom Widget' ,'specia'); ?></div>
									<div class="block"><?php _e('Section Order Manager' ,'specia'); ?></div>
									<div class="block"><?php _e('Style Configuration' ,'specia'); ?></div>
									<div class="block"><?php _e('Wide & Boxed Layout' ,'specia'); ?></div>
									<div class="block"><?php _e('Google Maps' ,'specia'); ?></div>
									<div class="block"><?php _e('Editable Post Slug' ,'specia'); ?></div>
									<div class="block"><?php _e('Prebuilt Theme Color' ,'specia'); ?></div>
									<div class="block"><?php _e('Social Media Integration' ,'specia'); ?></div>
									<div class="block"><?php _e('Unlimited Colors' ,'specia'); ?></div>
									<div class="block"><?php _e('Background Patterns' ,'specia'); ?></div>
									<div class="block"><?php _e('Filterable Portfolio' ,'specia'); ?></div>
									<div class="block"><?php _e('Custom Sidebars' ,'specia'); ?></div>
									<div class="block"><?php _e('Sticky Header' ,'specia'); ?></div>
									<div class="block"><?php _e('Section Order Manager' ,'specia'); ?></div>
									<div class="block"><?php _e('Footer Copyright Editor' ,'specia'); ?></div>
									<div class="block"><?php _e('Blog Paginations' ,'specia'); ?></div>
									<div class="block"><?php _e('Breadcrumbs Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('Extensive Documentation' ,'specia'); ?></div>
									<div class="block"><?php _e('Awesome Support' ,'specia'); ?></div>
									<div class="block"><?php _e('4 Column Footer' ,'specia'); ?></div>
								</div>
							</div>
						</section>
						<!-- /Section Two -->
						
						<!-- Section Three -->
						<section class="section-three">
							<table>
								<colgroup></colgroup>
								<colgroup></colgroup>
								<colgroup></colgroup>
								<colgroup></colgroup>

								<thead>
									<tr>
										<th>&nbsp;</th>
										<th>
											<h2><?php _e('Free' ,'specia'); ?></h2>
											<p></p>
										</th>
										<th>
											<h2><?php _e('Premium' ,'specia'); ?></h2>
											<p class="promo"><?php _e('Enhance your website with premium version' ,'specia'); ?></p>
										</th>
									</tr>
								</thead>

								<tfoot>
									<tr>
										<th>&nbsp;</th>
										<td><a href="<?php echo 'https://wordpress.org/themes/proficient/'; ?>" class="buy-btn btn-green" target="_blank"><i class="dashicons dashicons-download"></i> <?php _e('Free Download','specia'); ?></a></td>
										<td><a href="<?php echo 'https://speciatheme.com/proficient-premium-wordpress-theme/'; ?>" class="buy-btn btn-red" target="_blank"><i class="dashicons dashicons-cart"></i> <?php _e('Buy Proficient Now','specia'); ?></a></td>
									</tr>
								</tfoot>

								<tbody>
									<tr>
										<th><?php echo sprintf(__("Header Soical Icons & Contact Info","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Logo & Favicon","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Touch & Swipe Slider","specia")); ?></th>
										<td><?php echo sprintf(__("<b>3 Slides</b> Supports","specia")); ?></td>
										<td><?php echo sprintf(__("<b>Unlimited Slides</b> with more features","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Call to Action","specia")); ?></th>
										<td><?php echo sprintf(__("<b>1 Animation</b> with background color","specia")); ?></td>
										<td><?php echo sprintf(__("<b>5 Animation</b> with Custom Buttons","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Service Section","specia")); ?></th>
										<td><b><?php _e('3 Services' ,'specia'); ?></b></td>
										<td><?php echo sprintf(__("<b>Unlimited</b> Services (Icons & Image) with <b>Own Link</b>","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Features Section","specia")); ?></th>
										<td><b><?php _e('With background color' ,'specia'); ?></b></td>
										<td><b><?php _e('With background color and background image' ,'specia'); ?></b></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Portfolio Section","specia")); ?></th>
										<td></i><b><?php _e('3 Portfolio' ,'specia'); ?></b></td>
										<td><?php echo sprintf(__("<b>Unlimited Portfolio</b>","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("WooCommerce Compatibility","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Translation Ready","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Testimonial Section","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Client/Sponsor Section","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Filterable Portfolio","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Attractive Blog Pages","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("WPML & Polylang Support","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Section Order Manager","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("About Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									<tr>
										<th><?php echo sprintf(__("Service Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Pricing Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Preset Background & Colors","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Website Layouts","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Breadcrumbs</span>","specia")); ?></th>
										<td><?php _e('Fixed Background Color' ,'specia'); ?></td>
										<td><?php _e('Background Color & Background Image' ,'specia'); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Photo Gallery</span>","specia")); ?></th>
										<td><?php _e('Core Gallery Support' ,'specia'); ?></td>
										<td><?php echo sprintf(__("<b>Jetpack</b> Gallery Support","specia")); ?>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Page Template","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Awesome Fast Support","specia")); ?></th>
										<td><?php echo sprintf(__("<b>Free</b> <a href='https://specia.ticksy.com/' target='_blank'>Help Desk</a>","specia")); ?></td>
										<td><?php echo sprintf(__("<b>Premium</b> <a href='https://specia.ticksy.com/' target='_blank'>Help Desk</a></i></a>","specia")); ?></td>
									</tr>
								</tbody>

							</table>
						</section>
                    </div>
					
					
					<div id="avira" class="tab-item">
                        <!-- Section One -->
						<section class="section-one">
							<div id="container" class="cf">
							
								<div class="span7">
									<img class="theme_screen" src="<?php echo get_template_directory_uri(); ?>/images/avira.png">
								</div>
								
								<div class="span5">
									<h1><?php _e('Avira Premium WordPress Theme' ,'specia'); ?></h1>
									<p><?php _e('Avira is the right theme for you if you are looking for a multipurpose theme that can handle everything you throw at it. It is perfect for business themes, marketing, corporate startup, agency, blog, business, company, corporate, creative, portfolio, professional and more. The design is easy to change and adapt to the client needs. The theme has all the modern functionality such as: slider, services, blogs and much more.' ,'specia'); ?></p>
									
									<div class="promo-buttons">
										<a href="<?php echo 'http://demo.speciatheme.com/pro/?theme=avira'; ?>" class="promo-btn btn-black" target="_blank"><i class="dashicons dashicons-desktop info-icon"></i> <?php _e('Premium Demo','specia'); ?></a>
										
										<a href="<?php echo 'https://speciatheme.com/avira-premium-wordpress-theme/'; ?>" class="promo-btn btn-red" target="_blank"><i class="dashicons dashicons-cart info-icon"></i> <?php _e('Buy Premium','specia'); ?></a>
									</div>
						
								</div>
							</div>
						</section>
						<!-- /Section One -->
						
						<!-- Section Two -->
						<section class="section-two" style="background: url('<?php echo get_template_directory_uri(); ?>/images/features.jpg') no-repeat fixed 0 0 / cover;">
							<div class="section_overlay">
								
								<h1><?php _e('Why Choose Avira Premium?' ,'specia'); ?></h1>
								<div class="features">
									<div class="block"><?php _e('Responsive Design' ,'specia'); ?></div>
									<div class="block"><?php _e('Browser Compatibility' ,'specia'); ?></div>
									<div class="block"><?php _e('Translation Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('WPML & Polylang Supports' ,'specia'); ?></div>
									<div class="block"><?php _e('WooCommerce Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('Contact Form 7 Supports' ,'specia'); ?></div>
									<div class="block"><?php _e('Ninja Form Support' ,'specia'); ?></div>
									<div class="block"><?php _e('12 Page Templates' ,'specia'); ?></div>
									<div class="block"><?php _e('Custom Widget' ,'specia'); ?></div>
									<div class="block"><?php _e('Section Order Manager' ,'specia'); ?></div>
									<div class="block"><?php _e('Style Configuration' ,'specia'); ?></div>
									<div class="block"><?php _e('Wide & Boxed Layout' ,'specia'); ?></div>
									<div class="block"><?php _e('Google Maps' ,'specia'); ?></div>
									<div class="block"><?php _e('Editable Post Slug' ,'specia'); ?></div>
									<div class="block"><?php _e('Prebuilt Theme Color' ,'specia'); ?></div>
									<div class="block"><?php _e('Social Media Integration' ,'specia'); ?></div>
									<div class="block"><?php _e('Unlimited Colors' ,'specia'); ?></div>
									<div class="block"><?php _e('Background Patterns' ,'specia'); ?></div>
									<div class="block"><?php _e('Filterable Portfolio' ,'specia'); ?></div>
									<div class="block"><?php _e('Custom Sidebars' ,'specia'); ?></div>
									<div class="block"><?php _e('Sticky Header' ,'specia'); ?></div>
									<div class="block"><?php _e('Section Order Manager' ,'specia'); ?></div>
									<div class="block"><?php _e('Footer Copyright Editor' ,'specia'); ?></div>
									<div class="block"><?php _e('Blog Paginations' ,'specia'); ?></div>
									<div class="block"><?php _e('Breadcrumbs Ready' ,'specia'); ?></div>
									<div class="block"><?php _e('Extensive Documentation' ,'specia'); ?></div>
									<div class="block"><?php _e('Awesome Support' ,'specia'); ?></div>
									<div class="block"><?php _e('4 Column Footer' ,'specia'); ?></div>
								</div>
							</div>
						</section>
						<!-- /Section Two -->
						
						<!-- Section Three -->
						<section class="section-three">
							<table>
								<colgroup></colgroup>
								<colgroup></colgroup>
								<colgroup></colgroup>
								<colgroup></colgroup>

								<thead>
									<tr>
										<th>&nbsp;</th>
										<th>
											<h2><?php _e('Free' ,'specia'); ?></h2>
											<p></p>
										</th>
										<th>
											<h2><?php _e('Premium' ,'specia'); ?></h2>
											<p class="promo"><?php _e('Enhance your website with premium version' ,'specia'); ?></p>
										</th>
									</tr>
								</thead>

								<tfoot>
									<tr>
										<th>&nbsp;</th>
										<td><a href="<?php echo 'https://wordpress.org/themes/avira/'; ?>" class="buy-btn btn-green" target="_blank"><i class="dashicons dashicons-download"></i> <?php _e('Free Download','specia'); ?></a></td>
										<td><a href="<?php echo 'https://speciatheme.com/avira-premium-wordpress-theme/'; ?>" class="buy-btn btn-red" target="_blank"><i class="dashicons dashicons-cart"></i> <?php _e('Buy Avira Now','specia'); ?></a></td>
									</tr>
								</tfoot>

								<tbody>
									<tr>
										<th><?php echo sprintf(__("Header Soical Icons & Contact Info","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Logo & Favicon","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Touch & Swipe Slider","specia")); ?></th>
										<td><?php echo sprintf(__("<b>3 Slides</b> Supports","specia")); ?></td>
										<td><?php echo sprintf(__("<b>Unlimited Slides</b> with more features","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Call to Action","specia")); ?></th>
										<td><?php echo sprintf(__("<b>1 Animation</b> with background color","specia")); ?></td>
										<td><?php echo sprintf(__("<b>5 Animation</b> with Custom Buttons","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Service Section","specia")); ?></th>
										<td><b><?php _e('3 Services' ,'specia'); ?></b></td>
										<td><?php echo sprintf(__("<b>Unlimited</b> Services (Icons & Image) with <b>Own Link</b>","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Features Section","specia")); ?></th>
										<td><b><?php _e('With background color' ,'specia'); ?></b></td>
										<td><b><?php _e('With background color and background image' ,'specia'); ?></b></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Portfolio Section","specia")); ?></th>
										<td></i><b><?php _e('3 Portfolio' ,'specia'); ?></b></td>
										<td><?php echo sprintf(__("<b>Unlimited Portfolio</b>","specia")); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("WooCommerce Compatibility","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Translation Ready","specia")); ?></th>
										<td><i class="dashicons dashicons-yes"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Testimonial Section","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Client/Sponsor Section","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Filterable Portfolio","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Attractive Blog Pages","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("WPML & Polylang Support","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Section Order Manager","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("About Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									<tr>
										<th><?php echo sprintf(__("Service Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Pricing Page","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Preset Background & Colors","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Website Layouts","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Breadcrumbs</span>","specia")); ?></th>
										<td><?php _e('Fixed Background Color' ,'specia'); ?></td>
										<td><?php _e('Background Color & Background Image' ,'specia'); ?></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Photo Gallery</span>","specia")); ?></th>
										<td><?php _e('Core Gallery Support' ,'specia'); ?></td>
										<td><?php echo sprintf(__("<b>Jetpack</b> Gallery Support","specia")); ?>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Custom Page Template","specia")); ?></th>
										<td><i class="dashicons dashicons-no"></i></td>
										<td><i class="dashicons dashicons-yes"></i></td>
									</tr>
									
									<tr>
										<th><?php echo sprintf(__("Awesome Fast Support","specia")); ?></th>
										<td><?php echo sprintf(__("<b>Free</b> <a href='https://specia.ticksy.com/' target='_blank'>Help Desk</a>","specia")); ?></td>
										<td><?php echo sprintf(__("<b>Premium</b> <a href='https://specia.ticksy.com/' target='_blank'>Help Desk</a></i></a>","specia")); ?></td>
									</tr>
								</tbody>

							</table>
						</section>
                    </div>
					
                   

                </div>

            </div>
        </div><!-- wrap -->
    <?php
    }
}
