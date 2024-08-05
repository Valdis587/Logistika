<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="homeprojekt">
    <div class="home-title-wrapper container">
    <?php if($logistika['projact-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['projact-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['projact-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['projact-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="swiper homeprojekt__content container">
            <div class="swiper-wrapper homeprojekt__content-wrapper">
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'proekty',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'proekty');
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>
</section>