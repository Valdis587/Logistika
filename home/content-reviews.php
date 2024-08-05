<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="hometesti">
    <div class="hometesti__content container">
        <div class="hometesti__left">
        <img src="<?php echo $logistika['reviews-img']['url']; ?>" alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="hometesti__right">
            <div class="home-title-wrapper">
            <?php if($logistika['reviews-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['reviews-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['reviews-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['reviews-desc-home']; ?></p>
    <?php }  ?>
                </div>
            <div class="swiper hometesti__slider">
                <div class="swiper-wrapper hometesti__slider-wrapp">
                <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'otzyvy',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'reviews' );
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>