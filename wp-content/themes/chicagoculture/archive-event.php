<link rel="stylesheet" href="/iamteam19/wp-content/themes/Divi/style.css">
<link rel="stylesheet" href="/iamteam19/wp-content/themes/chicagoculture/event-style.css">

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<script>
    function goUpcoming() {
    var element = document.getElementById("Upcoming");
    element.scrollIntoView();
    }

    function goOngoing() {
        var element = document.getElementById("Ongoing");
        element.scrollIntoView();
    }

    function goPast() {
        var element = document.getElementById("Past");
        element.scrollIntoView();
    }
</script>

<!------------------------------------------------------------->
	
<div id="main-content">


			
				<article id="post-14621" class="post-14621 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div id="et-boc" class="et-boc">
			
			<div class="et_pb_section et_pb_section_0 et_pb_fullwidth_section et_section_regular">
                
                
    <section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_section_parallax et_pb_bg_layout_dark et_pb_text_align_left" style="padding: 8% 0;">
        <span class="et_parallax_bg"></span>
                
        <div class="et_pb_fullwidth_header_container left">
            <div class="header-content-container center">
                <div class="header-content">
                        
                    <h1 class="et_pb_module_header" style="font-size:60px; line-height: 1.2em;">Events</h1>
                    <div class="et_pb_header_content_wrapper"></div>
                    
                </div>
            </div>
                    
        </div>
        <div class="et_pb_fullwidth_header_overlay" style="background-image: url('http://goodspark.com/iamteam19/wp-content/uploads/2018/12/Screenshot-2018-12-06-15.36.29-1.png');"></div>
        <div class="et_pb_fullwidth_header_scroll"></div>
    </section>
                        </div></div></div>
                
                
<!--</div>-->
                        <div class="et_pb_section et_pb_section_1 et_section_regular">
				
				
				
				
					<div class="et_pb_row et_pb_row_0">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_0    et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_light  et_pb_text_align_left">
				
				
				<div class="et_pb_text_inner">
					<p>
Explore vibrant,&nbsp; engaging,&nbsp; and&nbsp; meaningful&nbsp; experiences&nbsp; that&nbsp; champion&nbsp; cultural&nbsp; heritage&nbsp; and&nbsp; encourage&nbsp; intercultural&nbsp;collaboration. From events to classes, exhibitions to performances, find out all the amazing offerings&nbsp;to&nbsp; experience&nbsp; global&nbsp; and&nbsp; local&nbsp; cultures.&nbsp;&nbsp;Book&nbsp; your&nbsp; destination&nbsp; now and explore culture around the city!</p>
<p>Want to hear about culture around the city more often? <a href="https://www.chicagoculturalalliance.org/about/sign-up-for-our-mailing-list/"><strong>Sign up for our newsletter</strong></a> and we’ll deliver all the amazing offerings from our members to your inbox&nbsp;twice monthly!</p>
				</div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->
                    
            <div class="list">
            <div class="container">
                <div class="topbanner">
                    <h1>Music Night</h1>
                </div>

                <!--
                <div class="monthlybanner">
                    <h1>This Month</h1>
                </div>
                <div class="featuredbanner">
                    <h1>Featured</h1>
                </div>
                -->
            </div>
            <nav>
                <ul>
                    <button class="month-btn" onclick="goUpcoming()"><li><strong>Upcoming Events</strong></li></button>
                    <button class="month-btn" onclick="goOngoing()"><li><strong>Ongoing Events</strong></li></button>
                    <button class="month-btn" onclick="goPast()"><li><strong>Past Events</strong></li></button>
                </ul>
            </nav>

            <div class="month-parent" id="Upcoming">
                <h2>Upcoming Events</h2>

                <div class="month-child">
                    <?php

                    $members = new WP_Query(
                        array(
                                'posts_per_page' => -1,
                                'post_type' => 'event',
                                'orderby' => 'meta_value', 
                                'meta_key' => 'start_datetime',
                                'order' => 'ASC',
//                                'meta_query'	=> array(
//                                    'relation'		=> 'AND',
//                                    array(
//                                        'key'	 	=> 'start_datetime',
//                                        'value'	  	=> date("d/m/Y g:i a"),
//                                        'compare' => '>=',
//                                        'type' => 'DATE'
//                                    ),
//                                    array(
//                                        'key'	  	=> 'ongoing',
//                                        'value'	  	=> '0',
//                                        'compare' 	=> '='
//                                    )
//        `                       )
                            )
                    );

                    if ( $members->have_posts() ) : while ( $members->have_posts() ) : $members->the_post(); ?>

                        <h4> <?php the_title(); ?> </h4>
                        

<!--//                        the_post_thumbnail();-->
                        <p><?php the_excerpt(); ?></p>
                    <?php endwhile; endif; ?>
<!--
                    <h4>Music Night</h4>
                    <a><strong>Casa Italia</strong></a>
                    <h5>April 28, 2019 8:00pm</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Title of Event</h4>
                    <h5>Date and Time</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Title of Event</h4>
                    <h5>Date and Time</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
-->
                </div>

            </div>

            <div class="month-parent" id="Ongoing">
                <h2>Ongoing Events</h2>
                <div class="month-child">
                    <h4>Exhibition</h4>
                    <a><h5>September 9th, 2018 11:00am - June 31st, 2019 12:00am</h5></a>
                    <a><strong>National Hellenic Museum</strong></a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Title of Event</h4>
                    <h5>Date and Time</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

            </div>

            <div class="month-parent" id="Past">
                <h2>Past Events</h2>
                <div class="month-child">
                    <h4>Curator's Talk</h4>
                    <h5>March 22nd 2019, 6:00pm</h5>
                    <a><strong>Chinese American Museum of Chicago</strong></a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Title of Event</h4>
                    <h5>Date and Time</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Title of Event</h4>
                    <h5>Date and Time</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Title of Event</h4>
                    <h5>Date and Time</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

            </div>
			
		</div>

				
</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


<?php get_footer(); ?>