<link rel="stylesheet" href="/iamteam19/wp-content/themes/Divi/style.css">
<link rel="stylesheet" href="/iamteam19/wp-content/themes/chicagoculture/journey-style.css">
<link rel="stylesheet" href="/iamteam19/wp-content/themes/chicagoculture/archive-journey-style.css">
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
					<div class="et_pb_header_content_wrapper"></div>
					
				</div>
			</div>					
		</div>
        
		<div class="et_pb_fullwidth_header_overlay" style="background-image: url('http://goodspark.com/iamteam19/wp-content/uploads/2018/12/Screenshot-2018-12-06-15.36.29-1.png');"></div>
		<div class="et_pb_fullwidth_header_scroll"></div>
    </section>
								
</div>


<!--- code is different from single journeys here --->

<div id="main-content">

    <div class="container">
        <div id="content-area" class="clearfix">


            <div class="journey-instructions"><h1>What is a Journey?</h1></div>
            
            <div class="journey-flex-container">
					
            <?php while ( have_posts() ) : the_post(); ?>
                   
                <?php

				if( $posts ): ?>

				    <?php setup_postdata($post); ?>
                                       
                        <div class="journey-flex-item">
                                       
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                           
                            <?php 

                            $image = get_field('journey_image');

                                if( !empty($image) ): ?>
	                               <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                       
                                <div class="title-block">
                                    <?php the_title(); ?>
                                </div> <!-- .title-block -->
                                           
                            </a>
                                           
                        </div> <!-- .journey-flex-item -->           
					    
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			
			<?php endwhile; ?>
                    
            </div> <!-- .journey-container -->
            
        </div> <!-- #content-area -->
	</div> <!-- .container -->

</div> <!-- #main-content -->


<?php
    get_footer();
?>

