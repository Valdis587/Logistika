<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika;
$value = redux_post_meta( 'logistika', 'uslugi' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__service">
    <div class="cart__service-img">
    <?php
            $id = get_post_thumbnail_id();
            $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
        <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__service-info">
        <div class="cart__service-icon"><i class="icon-cogs"></i></div>
        <a href="<?php the_permalink(); ?>" class="cart__service-title btn-line"><?php the_title(''); ?></a>
        <p class="cart__service-desc"><?php do_excerpt(get_the_excerpt(), 6); ?></p>
        <p class="cart__service-price"><?php echo $value['uslugi-price']; ?></p>
        <a href="<a href="<?php the_permalink(); ?>" class="cart__service-btn btn-line">Подробнее</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->
