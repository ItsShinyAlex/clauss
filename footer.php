<?php
/**
 * The template for displaying the footer
 *
 */
?>
    <?php if ( woodmart_needs_footer() ): ?>
    <?php if ( ! woodmart_is_woo_ajax() ): ?>
    </div>
    <!-- .main-page-wrapper -->
    <?php endif ?>
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    <?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>


        <!-- FOOTER -->
        <footer class="footer-container color-scheme-<?php echo esc_attr( woodmart_get_opt( 'footer-style' ) ); ?>">
            <section id="contacto" class="template-section padding-50">
                <div class="contenedor">
                    <h2>¡CONTÁCTAME HOY!</h2>

                    <div class="flex">
                        <div class="columna">
                            <?php echo do_shortcode('[caldera_form id="CF5a6fad0d3968e"]'); ?>
                        </div>
                        <div class="columna">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/mail.png" alt="Email">
                            <a class="email" href="mailto:contacto@claussaludable.com">contacto@claussaludable.com</a>

                            <div class="redes">
                                <h3>Sígueme en: </h3>
                                <div class="redes">
                                    <a target="_blank" href="https://www.facebook.com/ClausSaludable"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/facebook.png" alt="Facebook"></a>
                                    <a target="_blank" href="https://www.instagram.com/claussaludable/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/instagram.png" alt="Instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
			if ( ! $disable_footer_page && woodmart_get_opt( 'disable_footer' ) ) {
				get_sidebar( 'footer' );
			}
		 ?>
                <?php if ( !$disable_copyrights_page && woodmart_get_opt( 'disable_copyrights' ) ): ?>
                <div class="copyrights-wrapper copyrights-<?php echo esc_attr( woodmart_get_opt( 'copyrights-layout' ) ); ?>">
                    <div class="container">
                        <div class="min-footer">
                            <div class="col-left">
                                <?php if ( woodmart_get_opt( 'copyrights' ) != '' ): ?>
                                <?php echo do_shortcode( woodmart_get_opt( 'copyrights' ) ); ?>
                                <?php else: ?>
                                <p>&copy;
                                    <?php echo date( 'Y' ); ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <?php bloginfo( 'name' ); ?>
                                    </a>.
                                    <?php esc_html_e( 'All rights reserved', 'woodmart' ) ?>
                                </p>
                                <?php endif ?>
                            </div>
                            <?php if ( woodmart_get_opt( 'copyrights2' ) != '' ): ?>
                            <div class="col-right">
                                <?php echo do_shortcode( woodmart_get_opt( 'copyrights2' ) ); ?>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php endif ?>

        </footer>
        <?php endif ?>
        </div>
        <!-- end wrapper -->
        <div class="woodmart-close-side"></div>
        <?php wp_footer(); ?>
        </body>

        </html>
