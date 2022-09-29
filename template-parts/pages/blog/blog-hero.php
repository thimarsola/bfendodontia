<section class="hero pt-s">
    <!-- row -->
    <div class="container">
        <div class="hero__row grid">

            <!-- content -->
            <div class="hero__row__content pb-10">
                <!-- header -->
                <header class="hero__row__content__header mb-3">
                    <h2 class="f-6">Conheça os melhores conteúdos de odontologia</h2>
                </header>
                <!-- end of header -->

                <p class="t-justify f-3">Os melhores artigos para odontologia você encontra aqui!</p>
            </div>
            <!-- end of content -->

            <!-- cta -->
            <div class="hero__row__cta t-center">
                <a class="btn btn-primary-500" href="<?= get_the_permalink() ?>#blog" title="Conheça os melhores conteúdos de odontologia">Saiba mais</a>
            </div>
            <!-- end of cta -->

        </div>
    </div>
    <!-- end of row -->

    <!-- image -->
    <div class="hero__image">
        <?= $image = picture('capa-blog', 'Clínica BF Endodontia | ' . get_the_title(), 'img-fluid'); ?>
    </div>
    <!-- image -->
</section>