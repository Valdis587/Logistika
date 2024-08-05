<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Logistika
 */

 global $logistika;
 get_template_part('home/content', 'logo');
 ?>
 </div>
    <footer class="footer">
     <div class="footer__content container">
         <div class="footer__content-contact">
         <?php if($logistika['foo-title1']) { ?>
             <h5 class="footer__title"><?php echo $logistika['foo-title1']; ?></h5>
             <?php } ?>
             <ul class="footer__contact-list">
             <?php get_template_part( 'template-parts/content', 'contact' ); ?>
             </ul>
         </div>
         <div class="footer__content-menu">
         <?php if($logistika['foo-title2']) { ?>
             <h5 class="footer__title"><?php echo $logistika['foo-title2']; ?></h5>
             <?php } ?>
             <?php if( has_nav_menu('menu-page') ) {
                 Logistika_menu_page();
             }?>
         </div>
         <div class="footer__content-menu">
         <?php if($logistika['foo-title3']) { ?>
             <h5 class="footer__title"><?php echo $logistika['foo-title3']; ?></h5>
             <?php } ?>
             <?php if( has_nav_menu('menu-service') ) {
                 Logistika_menu_service();
             }?>
         </div>
         <div class="footer__content-desc">
             <p><?php if($logistika['foo-text']) { echo $logistika['foo-text']; }?></p>
         </div>
     </div>
     <div class="footer__copy">
     <?php if($logistika['foo-copy']) { echo $logistika['foo-copy']; }?>
     </div>
     <div class="footer__button-up">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
 </footer>
 </div><!--end wrap-->
 <?php get_template_part( 'template-parts/content', 'popzak' );
 get_template_part( 'template-parts/content', 'popup' );
 ?>
 <?php if($logistika['google']) { echo $logistika['google']; } 
if($logistika['yandex']) { echo $logistika['yandex']; }
wp_footer(); ?>
</body>
</html>
