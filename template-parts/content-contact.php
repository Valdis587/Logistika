<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */
global $logistika;

if($logistika['phone']) { ?>
    <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $logistika['phone']); ?>"><?php echo $logistika['phone']; ?></a></li>
    <?php } ?>
    <?php if($logistika['email']) { ?>
    <li><i class="icon-envelope"></i><a href="mailto:<?php echo $logistika['email']; ?>"><?php echo $logistika['email']; ?></a></li>
    <?php } ?>
    <?php if($logistika['adres']) { ?>
    <li><i class="icon-map-marker-alt"></i><?php echo $logistika['adres']; ?></li>
    <?php } ?>
    <?php if($logistika['time-york']) { ?>
    <li><i class="icon-clock"></i> <?php echo $logistika['time-york']; ?></li>
    <?php } ?>