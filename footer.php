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

		<aside id="colophon" <?php cryout_schema_microdata( 'sidebar' );?>>
			<div id="colophon-inside" <?php bravada_footer_colophon_class();?>>
				<?php get_sidebar( 'footer' );?>
			</div>
		</aside><!-- #colophon -->

	</div><!-- #main -->

    <div class="container mt-5 mb-5 pt-5 pb-5">
        <div class="row">
            <div class="col-12 text-center">
                <?php $imageApoiadores = get_site_url() . '/wp-content/uploads/2024/10/Captura_de_tela_de_2024-10-17_13-27-12-removebg-preview.png'; ?>
                <img src="<?= $imageApoiadores ?>" alt="Apoiadores" class="img-responsive m-auto d-block">
            </div>
        </div>
    </div>
	<footer id="footer" class="cryout" <?php cryout_schema_microdata( 'footer' );?>>
		<?php cryout_master_topfooter_hook(); ?>
		<div id="footer-top">
			<div class="footer-inside">
				<?php cryout_master_footer_hook(); ?>
			</div>
		</div>
		<div id="footer-bottom">
			<div class="footer-inside">
				<p class="h6">Desenvolvido por <a class="link" href="https://www.patomarques.com.br">Pato Marques</a></p>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
