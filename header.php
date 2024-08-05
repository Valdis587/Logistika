<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Logistika
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="alternate" href="<?php echo home_url(); ?>" hreflang="ru-ru" />
    <link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); 
    global $logistika;
    ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
<?php if($logistika['loader-off']) { ?>
    <div class="preloader ">
    <button class="th-btn style2 preloaderCls">Завершить загрузку</button>
    <div class="preloader-inner">
        <span class="loader"></span>
    </div>
</div>
<?php } ?>
<?php if($logistika['cursor-off']) { ?>
	 <!-- Mouse cursor area start here -->
	 <div class="mouse-cursor cursor-outer"></div>
   <div class="mouse-cursor cursor-inner"></div>
   <!-- Mouse cursor area end here -->
   <?php } ?>
<header class="header">
    <div class="header__top-line">
        <div class="header__top-content container">
            <div class="header__top-left">
            <?php if($logistika['phone']) { ?>
                <a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $logistika['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $logistika['phone']; ?></a>
                <?php } ?>
                <?php if($logistika['email']) { ?>
                <a href="mailto:<?php echo $logistika['email']; ?>"><i class="icon-envelope"></i><?php echo $logistika['email']; ?></a>
                <?php } ?>
            </div>
            <div class="header__top-right">
                <ul class="header__top-social social">
                <?php get_template_part( 'template-parts/content', 'social' ); ?>
                </ul>
            </div>
            <button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button>
        </div>
    </div>
    <div class="header__bottom-line">
        <div class="header__bottom-content container">
            <div class="header__bottom-logo">
            <?php get_template_part( 'template-parts/content', 'logo' ); ?>
            </div>
            <div class="header__bottom-center">
                <div class="header__bottom-menu-wrapper">
                    <nav class="header__menu-nav"> 
                        <button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>
                            <?php if( has_nav_menu('menu-primary') ) {
                        Logistika_menu_primary();
                    }?>
                    </nav>
                </div>
            </div>
            <div class="header__bottom-right">
                <a id="popup" class="header__button btn-blue" href="javascript:void(0)">Заказать звонок</a>
            </div>
        </div>
    </div>
</header>
    <div class="content-wrapper">
