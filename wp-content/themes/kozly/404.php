<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kozly
 */

get_header();
?>
<div class="wrapper-404">
	<h2>404</h2>
	<?php
	if(CURRENT_LANG === 'ru') {
		?>
		<h3>Сорри, но этой страницы не существует.</h3>
		<?php
	} else {
		?>
		<h3>Error page</h3>
		<h3>Not found</h3>
		<?php
	}
	?>
</div>



<?php
get_footer();
