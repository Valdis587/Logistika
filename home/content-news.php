<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="homenews">
    <div class="home-title-wrapper">
    <?php if($logistika['news-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['news-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['news-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['news-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="swiper homenews__content container">
            <div class="swiper-wrapper homenews__content-wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'post',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
        endif;
        wp_reset_postdata();
        ?> 
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>