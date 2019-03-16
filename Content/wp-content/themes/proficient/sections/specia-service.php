<?php 
	$hide_show_service= get_theme_mod('hide_show_service','on'); 
	$service_title= get_theme_mod('service_title'); 
	$service_description= get_theme_mod('service_description');
	
	if($hide_show_service == 'on') :
?>

<?php 
	for($service =1; $service<4; $service++) 
	{
		if( get_theme_mod('service-page'.$service)) 
		{
			$service_query = new WP_query('page_id='.get_theme_mod('service-page'.$service,true));
			while( $service_query->have_posts() ) 
			{ 
				$service_query->the_post();
				$id_arr[] = $post->ID;
			}    
		}
	}
?>

<?php if(!empty($id_arr))
{ ?>
	<section class="service-version-one">
		
		<div class="container">
		
			<div class="row text-center padding-top-60 padding-bottom-30">
				<div class="col-sm-12">
				<?php if ($service_title) : ?>
					<h2 class="section-heading wow fadeInDown animated"><?php echo wp_filter_post_kses($service_title); ?></h2>
				<?php endif; ?>
				
				<?php if ($service_description) : ?>
					<p><?php echo esc_html($service_description); ?></p>
				<?php endif; ?>
				</div>
			</div>

			<div class="row padding-bottom-60">
				
				<?php 
					$i=1;
					foreach($id_arr as $id)
					{ 
						$title	= get_the_title( $id ); 
						$post	= get_post($id); 
						
						$content = $post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
				?> 
				<div class="col-md-4 col-sm-6">
					<div class="icon-block icon-block-1 wow fadeInUp">
						<div class="icon-block-item">
						
						<?php 
							$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
						if( !empty($image) ) { ?>
							<figure>
									<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr($alt); ?>" >
							</figure>
						<?php } else { ?>
							<?php if( get_post_meta(get_the_ID(),'icons', true ) ): ?>
								<i class="fa <?php echo get_post_meta( get_the_ID(),'icons', true); ?>"></i>
						<?php endif; }?>
						</div>
						
						<div class="icon-block-body">
							<h4><a href="<?php echo get_permalink(); ?>"> <?php echo esc_html($title); ?></a></h4>
							<?php echo $content; ?>
						</div>
					</div>
				</div>	
				
				<?php $i++; 
				}  ?>
			</div>
		</div>
	</section>
<div class="clearfix"></div>
<?php } wp_reset_postdata(); endif; ?>