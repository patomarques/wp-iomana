<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bravada
 */

?>

<?php cryout_absolute_bottom_hook(); ?>

<aside id="colophon" <?php cryout_schema_microdata('sidebar'); ?>>
	<div id="colophon-inside" <?php bravada_footer_colophon_class(); ?>>
		<?php get_sidebar('footer'); ?>
	</div>
</aside><!-- #colophon -->

</div><!-- #main -->

<div class="container mt-5 mb-5 pt-5 pb-5">
	<div class="row">
		<div class="col-12 text-center">

		</div>
	</div>
</div>

</div>

<section class="container fluid">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<img src="<?= get_stylesheet_directory_uri() . '/assets/img/logo-footer.png' ?>" alt="Logo - O fim da vida das coisas" class="img-responsive">
			</div>
			<div class="col-12 col-md-3">
				<h3 class="title-footer bold pb-3">Contato</h3>
				<a href="mailto:contato@ofimdavidadascoisas.com" class="link bold">contato@ofimdavidadascoisas.com</a>
				<p><a href="call:+5581988869961">+55 81 9 8886 9961</a></p>
				<p><a href="call:+5581988869961">+55 81 9 8886 9961</a></p>

				<h6 class="h6 bold pt-3 pb-3">Incentivo</h3>
					<?php $imageApoiadores = get_stylesheet_directory_uri() . '/assets/img/logos-incentivo.png'; ?>
					<img src="<?= $imageApoiadores ?>" alt="Apoiadores" class="img-responsive m-auto d-block">

			</div>
			<div class="col-12 col-md-3">
				<p>Estamos no instagram</p>
				<p><a href="https://instagram.com/">@ofimdavidadascoisas</a></p>

				<p>Produção</p>
				<div class="d-block-bg-black"></div>
			</div>
		</div>
	</div>
</section>
<footer id="footer" class="cryout bg-white" <?php cryout_schema_microdata('footer'); ?>>
	<?php cryout_master_topfooter_hook(); ?>
	<div id="footer-top">
		<div class="footer-inside">
			<?php cryout_master_footer_hook(); ?>
		</div>
	</div>
	<!-- <div id="footer-bottom">
			<div class="footer-inside">
				<p class="h6">Desenvolvido por <a class="link" href="https://www.patomarques.com.br" target="_blank">Pato Marques</a></p>
			</div>
		</div> -->
</footer>

<?php wp_footer(); ?>

</body>

</html>