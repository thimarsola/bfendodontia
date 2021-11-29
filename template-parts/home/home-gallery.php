<section class="gallery">
    <div class="container-fluid">

        <!-- header -->
        <header class="gallery__header d-none">
            <h2>Galeria</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="gallery__row grid"><!---->
             <?php for ($i = 1; $i < 7; $i++): ?>

                <!-- image -->
                 <a href="<?= image('galeria-' . str_pad($i, 2, 0, STR_PAD_LEFT) . '.jpg'); ?>" title="Conheça um pouco
                 mais do nosso consultório" class="gallery__row__card">
                     <?= picture('galeria-'. str_pad($i, 2, 0, STR_PAD_LEFT), 'Conheça um pouco mais do nosso consultório', 'img-fluid'); ?>
                 </a>
                <!-- end of image -->

             <?php endfor; ?>
         </div>
        <!-- end of row -->

    </div>
</section>