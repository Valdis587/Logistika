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
<div id="zak" class="popup-zak">
    <div class="popup-zak__body popup__show">   
        <div class="popup-zak__content">
          <button aria-label="popup close" class="popup-zak__close"><i class="icon-plus"></i></button>
          <div class="popup-zak__content-form"> 
          <div class="popup-zak__left"></div> 
          <div class="popup-zak__right">
          <?php if($logistika['popup-short-form']) {  echo do_shortcode($logistika['popup-short-form']); } ?>
            </div>
</div>
        </div>
</div>
    </div>
</div>
<!--end end popup-->