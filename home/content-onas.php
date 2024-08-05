<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; ?>

<section class="homeonas">
    <div class="homeonas__content">
    <div class="homeonas__item homeonas__img">
    <img src="<?php echo $logistika['onas-img1']['url']; ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <div class="homeonas__item homeonas__right">
        <div class="home-title-wrapper container">
        <?php if($logistika['onas-title-home']) {  ?>
    <h4 class="home-title"><?php echo $logistika['onas-title-home']; ?></h4>
    <?php }  ?>
    <?php if($logistika['onas-desc-home']) {  ?>
    <p class="home-desc"><?php echo $logistika['onas-desc-home']; ?></p>
    <?php }  ?>
            </div>
            <div class="homeonas__text">
                <p> <?php if($logistika['onas-text-left']) { echo $logistika['onas-text-left']; } ?></p>
                <a id="popup" class="homeonas__button btn-blue" href="javascript:void(0)">Заказать звонок</a>
            </div>
            
    </div>
</div>
</section>