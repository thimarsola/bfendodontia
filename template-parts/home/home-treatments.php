<section id="tratamentos" class="treatments py-s">
    <div class="container">
        <!-- header -->
        <?= title('treatments__header', '02', 'Tratamentos', 'Conheça mais sobre'); ?>
        <!-- end of header -->

        <!-- grid -->
         <div class="treatments__row grid">
             <?php
                $jsonTreatments = file_get_contents(__DIR__ . '/../../includes/treatments.json');
                $treatmentsList = json_decode($jsonTreatments, true);

                $i = 1;

                foreach ($treatmentsList['treatments'] as $treatment):
             ?>
                <!-- card -->
                 <article class="treatments__row__card d-flex p-5" style="background-image: url('<?= assets( "images/" .
                     $treatment['image'] .
                     ".jpg") ?>')">
                     <!-- header -->
                      <header class="treatments__row__card__header">
                          <?php
                            if($i === 1){
                                $class = 'f-4';
                            }else{
                                $class = 'f-3';
                            }
                            $i++;
                          ?>
                          <h3 class="<?= $class; ?>">
                              <a class="link-primary-500" href="<?= get_permalink(get_page_by_title($treatment['title'])) ?>"
                                 title="Conheça mais sobre esse nosso tratamento"
                                 target="_blank"><?=$treatment['title'];
                              ?></a>
                          </h3>
                      </header>
                     <!-- end of header -->
                 </article>
                <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end o fgrid -->
    </div>
</section>