<link rel="stylesheet" href="/iamteam19/wp-content/themes/Divi/style.css">
<link rel="stylesheet" href="/iamteam19/wp-content/themes/chicagoculture/guide-style.css">
<link rel="stylesheet" href="/iamteam19/wp-content/cache/et/14621/et-core-unified-155404152734.min.css">

<?php

get_header();

?>
<div class="et_pb_section et_pb_section_0 et_pb_fullwidth_section et_section_regular">
				
				
	<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_section_parallax et_pb_bg_layout_dark et_pb_text_align_left" style="padding: 8% 0;">
		<span class="et_parallax_bg"></span>
				
		<div class="et_pb_fullwidth_header_container left">
			<div class="header-content-container center">
				<div class="header-content">
						
					<h1 class="et_pb_module_header" style="font-size:60px; line-height: 1.2em;">Journey Chicago</h1>
					<h1 class="entry-title main_title">Discover <?php the_title(); ?></h1>	
					<div class="et_pb_header_content_wrapper"></div>
					
				</div>
			</div>
					
		</div>
		<div class="et_pb_fullwidth_header_overlay" style="background-image: url('http://goodspark.com/iamteam19/wp-content/uploads/2018/12/Screenshot-2018-12-06-15.36.29-1.png');""></div>
		<div class="et_pb_fullwidth_header_scroll"></div>
	</section>
				
				
</div>
<div id="main-content">

	<div class="container">
		<div id="content-area" class="clearfix">


			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="entry-title main_title"><?php the_title(); ?></h1>
					<p id="journey-description"><?php the_field('journey_description'); ?></p>
					<?php

					$posts = get_field('places');

					if( $posts ): ?>
					    <ol class="guide-list">
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
								<button class="accordion"><li><h3 class="place-title"><?php the_field('place_title'); ?></h3></li><img class="accordion-arrow" src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/pinktriangle-upsidedown1-5.png"/></button>
								<div class="panel">
									<div class="place-img-container"><?php
												
									$image = get_field('place_image');
			
									if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php endif; ?></div>
											
									<?php if (get_field('place_description')): ?>
										<p><?php the_field('place_description'); ?></p>
									<?php endif; ?>
									<?php if (get_field('place_cost')): ?>
										<p><img src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/icon-dollar.png" alt=""/> Cost: <?php the_field('place_cost'); ?></p>
									<?php endif; ?>
									<?php if (get_field('place_address')): ?>
										<p><img src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/icon-maps.png" alt=""/> <?php the_field('place_address'); ?></p>
									<?php endif; ?>
									<?php if (get_field('place_website')): ?>
										<p><img src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/icon-www.png" alt=""/> <a href="<?php the_field('place_website'); ?>" style="color: #DF1A82"><?php the_field('place_website'); ?></a></p>
									<?php endif; ?>	
									<?php if (get_field('place_hours')): ?>
										<div class="hours-container">
											<p class="place-hours"><img src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/icon-clock.png" alt=""/><?php the_field('place_hours'); ?></p>
											<img class="hours-arrow" src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/pinktriangle-upsidedown1-5.png"/>
										</div>
									<?php endif; ?>
								</div>								
					    <?php endforeach; ?>
					    </ol>
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>

				</article> <!-- .et_pb_post -->
			<?php endwhile; ?>

		</div> <!-- #content-area -->
	</div> <!-- .container -->

</div> <!-- #main-content -->
<?php
wp_enqueue_script( 'guide', '/wp-content/themes/chicagoculture/guide.js', true);
?>
<?php
 
get_footer();
