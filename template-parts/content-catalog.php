<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; 
$value = redux_post_meta( 'logistika', 'katalog' );
?>

<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__catalog cart__shadow">
    <div class="cart__catalog-img">
    <?php
    $id = get_post_thumbnail_id();
    $main=wp_get_attachment_image_src( $id, 'blog' ); ?>
     <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__catalog-info">
        <a href="<?php the_permalink(); ?>" class="cart__catalog-name btn-line"><?php the_title(''); ?></a>
        <div class="cart__catalog-spec-wrapp">
        <?php
                        if($value['item-catalog']) {
							 $i =0;
							foreach ($value['catalog-left'] as $tab => $key) { $i++;
                            if($i < 3) { ?>
                              <p class="single__catalog-item"><span><?php echo $value ['catalog-left'][$i-1]; ?></span><?php echo $value ['catalog-right'][$i-1]; ?></p>
            <?php } } } ?>
        </div>
        <div class="cart__catalog-button-wrapp">
            <a id="coll-popup"  data-product-id="<?php echo get_the_ID() ?>" class="cart__catalog-button btn-blue" href="javascript:void(0)">Заказать</a>
            <a class="cart__catalog-button btn-dark" href="<?php the_permalink(); ?>">Подробнее</a>
        </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->