<section class="hero pt-s">
    <!-- row -->
    <div class="container">
        <div class="hero__row grid">

            <!-- content -->
            <div class="hero__row__content pb-10">
                <!-- header -->
                <header class="hero__row__content__header mb-3">
                    <h2 class="f-6">Clínica especializada em endodontia</h2>
                </header>
                <!-- end of header -->

                <p class="t-justify f-3">Venha entender como pode ser simples fazer um tratamento de canal</p>
            </div>
            <!-- end of content -->

            <!-- cta -->
            <div class="hero__row__cta t-center">
                <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], 'Fale conosco', 'btn btn-primary-500', 'Vamos conversar?') ?>
            </div>
            <!-- end of cta -->

        </div>
    </div>
    <!-- end of row -->

    <!-- image -->
    <div class="hero__image">
        <?= picture('img-clinica-bf-endodontia', 'Clínica BF Endodontia', 'img-fluid'); ?>
    </div>
    <!-- image -->
</section>