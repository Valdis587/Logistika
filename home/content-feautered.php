<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>


<section class="feuter">
    <div class="home-title-wrapper">
    <?php if($logistika['feutered-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['feutered-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['feutered-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['feutered-desc-home']; ?></p>
    <?php }  ?>
</div>
    <div class="feuter__content container">
    <?php 
    $i=0; 
    if($logistika['title_feutered']) {
		foreach ($logistika['title_feutered'] as $tab => $key) { $i++ ?>
        <div class="feuter__item cart__border-color">
            <div class="feuter__img">
            <img src="<?php echo $logistika['feutered-img'][$i-1]['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="feuter__text">
                <p class="feuter__title"><?php echo $logistika['title_feutered'][$i-1]; ?></p>
                <p class="feuter__desc"><?php echo $logistika['textarea_feutered'][$i-1]; ?></p>
            </div>
        </div>
        <?php } } ?>
    </div>
</section>