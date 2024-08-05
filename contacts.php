<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
global $logistika;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item">
            <ul class="page__contact-list">
            <?php get_template_part( 'template-parts/content', 'contact' ); ?>
            </ul>
        </div>
        <div class="page__item">
        <?php if($logistika['map']) { 
            echo $logistika['map'];
        } ?>
        </div>
    </div>
</div>
<?php
get_footer();