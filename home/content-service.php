<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="homeserv">
    <div class="home-title-wrapper">
    <?php if($logistika['serv-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['serv-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['serv-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['serv-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="swiper homeserv__content container">
            <div class="swiper-wrapper homeserv__content-wrapper">
       <?php   
            
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'uslugi',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
                                get_template_part( 'template-parts/content', 'uslugi' );
			endwhile;
		endif; ?>
       </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>