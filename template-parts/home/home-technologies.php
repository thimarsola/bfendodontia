<section class="technologies bg-light-blue-500 py-s">
    <div class="container">

        <!-- header -->
        <?= title('technologies__header', '03', 'Tecnologias', 'Conheça mais sobre'); ?>
        <!-- end of header -->

        <!-- row -->
         <div class="technologies__row grid">
             <?php
             $jsonTechnologies = file_get_contents(__DIR__ . '/../../includes/technologies.json');
             $technologiesList = json_decode($jsonTechnologies, true);

             foreach ($technologiesList['technologies'] as $technology):
             ?>

             <!-- card -->
              <article class="technologies__row__card">
                  <!-- image -->
                  <div class="technologies__row__card__image mb-3">
                      <?= picture($technology['image'], 'Conheça essa tecnologia: ' . $technology['title'], 'img-fluid'); ?>
                  </div>
                  <!-- end of image -->

                  <!-- header -->
                   <header class="technologies__row__card__header t-center">
                       <h3 class="clr-primary-500"><?= $technology['title']; ?></h3>
                   </header>
                  <!-- end of header -->
              </article>
             <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end of row -->
    </div>
</section>