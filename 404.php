<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="container-fluid bg-404">
		<div class="row">
			<div class="col-lg-6 col-md-0 col-sm-0"></div>

			<div class="col-lg-6 col-md-12 col-sm-12 ">
				<h4 class="hand txt-error">Página não <br> Encontrada</h4>

				<a class="more-link text-white btn-error"  href="<?php echo home_url(); ?>" alt="voltar para página principal do site">Volte para a página inicial</a>
			</div>
		</div>
</section>

<?php get_footer();
