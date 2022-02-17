<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>
	<!-- BEGIN of 404 page -->
	<main class="error404">
		<div class="error404_one num404">4</div>
		<div class="error404_two num404">0</div>
		<div class="error404_three num404">4</div>
		<div class="not_fount">
			<?php 
				switch (pll_current_language()) {
					case 'ru':
						echo '<p>Страница не найдена</p>';
						break;

					case 'en':
						echo '<p>Page not found</p>';
						break;

					case 'it':
						echo '<p>La pagina non esiste</p>';
						break;

					case 'pt':
						echo '<p>A página não existe</p>';
						break;
					
					default:
						echo '<p>Page not found</p>';
						break;
				}
			?>
		</div>
	</main>
	<!-- END of 404 page -->
<?php get_footer(); ?>
