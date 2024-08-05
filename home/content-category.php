<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="categoryhome">
    <div class="home-title-wrapper">
    <?php if($logistika['cat-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['cat-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['cat-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['cat-desc-home']; ?></p>
    <?php }  ?>
</div>
<div class="categoryhome__content-grid container">
    <?php
                    $terms = get_terms( array(
                        'taxonomy' => 'kategory',
                        'hide_empty' => true,
                        'pad_counts'=> true,
                        'orderby' => 'name',
                        'parent' => 0
                    ) );
                   
                    $item=0;
                    if($terms) {
                        foreach($terms as $term) {                        
                                $term_id = $term->term_id;
                                // получим ID картинки из метаполя термина
                                $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );                             
                                // ссылка на полный размер картинки по ID вложения
                                $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                $tax = $term->taxonomy;
                                $children_terms = get_terms( array(
                                    'taxonomy' => $tax,
                                    'hide_empty' => true,
                                    'parent' => $term->term_id
                                ) );
                                ?>
           <div class="categoryhome__item cart__border-color">
           <a href="<?php echo get_category_link($term->term_id);?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $term->name;?>"></a>
            <a class="btn-line" href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name;?></a>
           </div>
           <?php if($children_terms) { ?>
                            <?php foreach ($children_terms as $children_term) { 
                                    $term_id = $children_term->term_id;
                                    // получим ID картинки из метаполя термина
                                    $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );                             
                                    // ссылка на полный размер картинки по ID вложения
                                    $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                ?>
              <div class="categoryhome__item cart__border-color">
           <a href="<?php echo get_category_link($children_term->term_id);?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $children_term->name; ?>"></a>
            <a class="btn-line" href="<?php echo get_category_link($children_term->term_id);?>"><?php echo $children_term->name; ?></a>
           </div>
           <?php } } } } ?>
    </div>
</section>