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

<div class="wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
		<?php
            
        $members = new WP_Query(
            array(
                    'posts_per_page' => -1,
                    'post_type' => 'members',
                    'member_type' => 'core-member',
                    'order' => 'ASC',
                    'orderby' => 'title'
                )
        );
        
		if ( $members->have_posts() ) : while ( $members->have_posts() ) : $members->the_post(); ?>
            
            <p> <?php the_title(); ?> </p>
            <?php 
            
            the_post_thumbnail();
            the_excerpt();
            
            $events = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'post_type' => 'event'
//                    'member_type' => 'core-member',
//                    'order' => 'ASC',
//                    'orderby' => 'title'
                    
                    //-------------------filter by custom field of current post > https://www.advancedcustomfields.com/resources/query-posts-custom-fields/
                )
            );
            
            if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post(); ?> 
            
                <p> <?php the_title(); ?> </p>
            
            <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>