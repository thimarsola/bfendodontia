<?php
$whatsapp = whatsapp(formatPhone(CONTACT['whatsapp']['number']),CONTACT['whatsapp']['message'] . ' sobre o tratamento: ' . get_the_title(), 'Saiba mais', 'btn btn-primary-500', 'Vamos conversar?') ;
$image = picture('tratamento-e-retratamento-endodontico', 'Clínica BF Endodontia | ' . get_the_title(), 'img-fluid');

$hero = file_get_contents(__DIR__ . '/../pages-hero.php');
$hero = str_replace('%title%', get_the_title(), $hero);
$hero = str_replace('%description%', 'Conheça mais sobre este tratamento realizado pela clínica BF Endodontia', $hero);
$hero = str_replace('%whatsapp%', $whatsapp, $hero);
$hero = str_replace('%image%', $image, $hero);

echo $hero;
?>

<!-- content -->
<section class="content py-s">
    <div class="container">

        <!-- row -->
         <div class="content__row grid">

             <!-- container -->
             <div class="content__row__container">

                 <!-- body -->
                 <div class="content__row__container__body mb-10">
                     <!-- header -->
                     <header class="content__row__container__body__header f-6 mb-6">
                         <h2>Tratamento Endodôntico</h2>
                     </header>
                     <!-- end of header -->

                     <!-- text -->
                      <div class="content__row__container__body__text t-justify">
                          <p>É quando o dente não passou por nenhuma intervenção anteriormente, podendo o espaço dentro dos canais estarem contaminados ou até mesmo com conteúdo vital em processo inflamatório (causando a dor de dente aguda).</p>
                          <br>
                          <p>Observe no exemplo abaixo um dente inflamado (Fig.1) e em seguida os canais instrumentados (Fig.2) e por último obturado (Fig.3).</p>

                          <!-- row -->
                           <div class="content__row__container__body__text__row mt-7 grid-3">

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-dente-inflamado', 'Imagem dente inflamado', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.1 - Dente inflamado</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-canais-instrumentados', 'Imagem canal instrumentado', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.2 - Canal instrumentado</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-dente-obturado', 'Imagem dente obturado', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.3 - Dente obturado</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                           </div>
                          <!-- end of row -->
                      </div>
                     <!-- end of text -->
                 </div>
                 <!-- end of body -->

                 <hr>

                 <!-- body -->
                 <div class="content__row__container__body mt-10">
                     <!-- header -->
                     <header class="content__row__container__body__header f-6 mb-6">
                         <h2>Retratamento Endodôntico</h2>
                     </header>
                     <!-- end of header -->

                     <!-- text -->
                     <div class="content__row__container__body__text t-justify">
                         <p>É quando temos a indicação de refazer um tratamento anterior por contaminação do espaço ou falta de material obturador, que deve preencher por completo a parte interna do dente (canais) podendo gerar pus e inchaço se não feito. Aqui vai um exemplo de um dente sem canal tratado (Fig.4) e o mesmo dente com canal tratado (Fig.5).</p>

                         <!-- row -->
                         <div class="content__row__container__body__text__row mt-7 grid-3">
                             <!-- image -->
                             <div class="content__row__container__body__text__row__image">
                                 <figure>
                                     <?= picture('imagem-dente-sem-canal-tratado', 'Imagem dente sem canal tratado', 'img-fluid'); ?>
                                     <figcaption class="mt-2"><small>Fig.4 - Dente sem canal tratado</small></figcaption>
                                 </figure>
                             </div>
                             <!-- end of image -->

                             <!-- image -->
                             <div class="content__row__container__body__text__row__image">
                                 <figure>
                                     <?= picture('imagem-dente-com-canal-tratado', 'Imagem dente com canal tratado', 'img-fluid'); ?>
                                     <figcaption class="mt-2"><small>Fig.5 - Dente com canal tratado</small></figcaption>
                                 </figure>
                             </div>
                             <!-- end of image -->

                         </div>
                         <!-- end of row -->
                     </div>
                     <!-- end of text -->
                 </div>
                 <!-- end of body -->
             </div>
             <!-- end of container -->

             <!-- sidebar -->
              <?= get_sidebar('treatments'); ?>
             <!-- end of sidebar -->

         </div>
        <!-- end of row -->

    </div>
</section>
<!-- end of content -->
