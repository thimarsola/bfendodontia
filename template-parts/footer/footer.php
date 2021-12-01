<footer class="footer">

    <!-- content -->
    <div class="footer__content bg-light-blue-500 py-6">
        <div class="container">

            <!-- brand -->
            <div class="footer__content__brand d-flex jc-center ai-center mb-2">
                <?= picture('logo-rodape', 'Clínica BF Endodontia', null, 'png'); ?>
            </div>
            <!-- end of brand -->

            <!-- menu -->
            <div class="footer__content__menu mb-6">
                <nav class="footer__content__menu__nav">
                    <h2 class="d-none">Menu de Navegação Rodapé</h2>
                    <?php
                    if (is_home()) {
                        wp_nav_menu(array('theme_location' => 'footer-home', 'container_class' => ''));
                    } else {
                        wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => ''));
                    }
                    ?>
                </nav>
            </div>
            <!-- end of menu -->

            <!-- social -->
            <div class="footer__content__social t-center f-3">
                <ul class="d-flex jc-center ai-center gp-4">
                    <li>
                        <a rel="nofollow noreferrer noopener" class="link-primary-500" href="<?= CONTACT['facebook'] ?>"
                           title="Siga a BF Endodontia no Facebook" target="_blank"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                        <a rel="nofollow noreferrer noopener" class="link-primary-500" href="<?= CONTACT['instagram']
                        ?>" title="Siga a BF Endodontia no Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    </li>
                    <li>
                        <a rel="nofollow noreferrer noopener" class="link-primary-500" href="<?= CONTACT['youtube'] ?>"
                           title="Siga a BF Endodontia no YouTube" target="_blank"><i class="icon-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end of social -->

        </div>
    </div>
    <!-- end of content -->

    <!-- copyright -->
    <div class="footer__content__copyright py-1 t-center">
        <div class="container">
            <p><small><?= date('Y'); ?> - <?= SITE['name']; ?> &COPY; - Todos os direitos reservados</small></p>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
    <div class="footer__developer bg-primary-500 py-1">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row d-flex jc-between ai-center clr-white-500">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p><small>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" class="link-white-500" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b></small>
                    </p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if (!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        } elseif (is_single()) {
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        } else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <p><small><a rel="nofollow noreferrer noopener" class="d-flex jc-center ai-center link-white-500"  href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase; ?>%2F" target="_blank" title="Tecnologia W3C"><i class="icon-html"></i>W3C Validator </a></small></p>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>