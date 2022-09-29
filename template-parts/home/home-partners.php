<section id="parcerias" class="partners py-s">
    <div class="container">

        <!-- header -->
        <?= title('partners__header', '05', 'Parceria', 'Conheça mais sobre'); ?>
        <!-- end of header -->

        <!-- row -->
        <div class="partners__row grid">
            <!-- container -->
            <div class="partners__row__container">
                <!-- content -->
                <article class="partners__row__container__content">
                    <!-- header -->
                    <header class="partners__row__container__content__header mb-6">
                        <h3 class="f-4 mb-2">Seja um parceiro da BF Endodontia e conheça os benefícios</h3>

                        <p class="clr-primary-500 t-justify">Se você deseja conhecer como trabalhamos com nossos
                            parceiros nos chame no WhatsApp para agendarmos uma visita da nossa equipe à sua clinica</p>
                    </header>
                    <!-- end of header -->

                    <p class="t-justify mb-6">Nós da BF endodontia temos como nossa maior prioridade a manutenção e
                        satisfação dos nossos indicadores. No ABC e São Paulo, ja somam mais de 70 indicadores que nos
                        mandam constantemente seus casos de endodontia e entendem, tanto pela conclusão e manutenção dos
                        casos, como pelo valor agregado junto ao paciente e tecnologias disponíveis que financeiramente
                        e também pela segurança, é algo muito vantajoso nos ter como parceiro. Além de tudo, aos
                        parceiros temos uma política de repasse financeiro, se tornando também uma parceria muito
                        rentável</p>

                    <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message_partners'],
                        'Seja um parceiro', 'btn btn-primary-500', 'Venha ser um parceiro BF Endodontia?') ?>
                </article>
                <!-- end of content -->
            </div>
            <!-- end of container -->

            <!-- video -->
            <div class="partners__row__video">
                <iframe src="https://www.youtube.com/embed/aX408bHyiRE" title="Clínica BF Endodontia"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen loading="lazy"></iframe>
            </div>
            <!-- end of video -->
        </div>
        <!-- end of row -->

    </div>
</section>