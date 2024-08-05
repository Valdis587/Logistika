<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika;


if($logistika['tg']) { ?>
                    <li><a aria-label="telegram" href="<?php echo $logistika['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                    <?php } ?>
                    <?php if($logistika['sk']) { ?>
                    <li><a aria-label="skype"  href="<?php echo $logistika['sk']; ?>"><i class="icon-skype"></i></a></li>
                    <?php } ?>
                    <?php if($logistika['vb']) { ?>
                    <li><a aria-label="viber"  href="<?php echo $logistika['vb']; ?>"><i class="icon-viber"></i></a></li>
                    <?php } ?>
                    <?php if($logistika['vk']) { ?>
                    <li><a aria-label="vk"  href="<?php echo $logistika['vk']; ?>"><i class="icon-vk"></i></a></li>
                    <?php } ?>
                    <?php if($logistika['wh']) { ?>
                    <li><a aria-label="whatsapp" href="<?php echo $logistika['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                    <?php } ?>