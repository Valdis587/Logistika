<?php
/*
Template Name: Главная
*/
get_header();
get_template_part('home/content', 'slider');
get_template_part('home/content', 'category');
get_template_part('home/content', 'feautered');
get_template_part('home/content', 'catalog');
get_template_part('home/content', 'onas');
get_template_part('home/content', 'project');
get_template_part('home/content', 'service');
get_template_part('home/content', 'reviews');
get_template_part('home/content', 'faq');
get_template_part('home/content', 'news');
get_footer();