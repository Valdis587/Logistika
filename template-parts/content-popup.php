<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika; 
?>
<div id="mini" class="popup">
    <div class="popup__body popup__show">   
        <div class="popup__content">
          <button aria-label="popup close" class="popup__close"><i class="icon-plus"></i></button>
              <div class="popup__wrapper">
                <div class="popup__img">
                <img src="<?php echo $logistika['popup-img']['url']; ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="popup__right">
                <h6 class="popup__title">Заказать звонок</h6>
                <?php if($logistika['popup-short-form']) {  echo do_shortcode($logistika['popup-short-form']); } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end end popup-->