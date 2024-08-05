<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="headpanel">
    <div class="headpanel__img">
        <img src="<?php echo $logistika['head-page']['url']; ?>" alt="<?php wp_title(''); ?>">
    </div>
    <div class="headpanel__content">
        <div class="headpanel__text">
        <h1 class="headpanel__title"><?php wp_title(''); ?></h1>
        <?php breadcrumbs(); ?> 
        </div>
    </div>
</section> 