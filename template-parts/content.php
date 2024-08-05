<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */

?>

<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__news cart__shadow">
    <div class="cart__news-img">
	<?php
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
         <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__news-date">
        <p class="cart__news-date-day"><?php the_date('d'); ?></p>
        <p class="cart__news-date-mon"><?php echo get_the_date( 'F'); ?></p>
    </div>
    <div class="cart__news-info">
        <div class="cart__news-admin">
            <span><i class="icon-user-alt"></i>Автор: <?php the_author(); ?></span>	
            <span class="cart__news-comment"><i class="icon-comments"></i><?php echo comments_number(); ?></span>		
        </div>
        <a class="cart__news-title btn-line" href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
        <p class="cart__news-desc"><?php do_excerpt(get_the_excerpt(), 12); ?> ...</p>
        <a class="cart__news-link btn-line" href="<?php the_permalink(); ?>">Читать далее</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->

