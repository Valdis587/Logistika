<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; 
$value = redux_post_meta( 'logistika', 'proekty' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__projekt">
    <div class="cart__projekt-img">
    <?php
    $id = get_post_thumbnail_id();
    $main=wp_get_attachment_image_src( $id, 'blog' ); ?>
     <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__projekt-info">
        <div class="cart__projekt-icon"><a href="<?php the_permalink(); ?>"><i class="icon-arrow-right"></i></a></div>
        <a href="<?php the_permalink(); ?>" class="cart__projekt-name btn-line"><?php the_title(''); ?></a>
        <p class="cart__projekt-price"><?php echo $value['proekty-price']; ?></p>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->