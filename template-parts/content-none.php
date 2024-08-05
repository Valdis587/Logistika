<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Logistika
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'technic' ); ?></h1>
	</header><!-- .page-header -->
			<?php
			get_search_form();
		?>
		   <a class="page-not-found btn-blue" href="<?php echo home_url(); ?>">На главную</a>
</section><!-- .no-results -->
