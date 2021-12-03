<?php
$whatsapp = whatsapp(formatPhone(CONTACT['whatsapp']['number']),CONTACT['whatsapp']['message'] . ' sobre o tratamento: ' . get_the_title(), 'Saiba mais', 'btn btn-primary-500', 'Vamos conversar?') ;
$image = picture('remocao-de-instrumentos-fraturados', 'Clínica BF Endodontia | ' . get_the_title(), 'img-fluid');

$hero = file_get_contents(__DIR__ . '/../pages-hero.php');
$hero = str_replace('%title%', get_the_title(), $hero);
$hero = str_replace('%description%', 'Conheça mais sobre este tratamento realizado pela clínica BF Endodontia', $hero);
$hero = str_replace('%whatsapp%', $whatsapp, $hero);
$hero = str_replace('%image%', $image, $hero);

echo $hero;
?>

<!-- content -->
<div class="content py-s">
    <div class="container">

        <!-- row -->
         <div class="content__row grid">

             <!-- container -->
             <section class="content__row__container">

                 <!-- body -->
                 <div class="content__row__container__body">
                     <!-- header -->
                     <div class="content__row__container__body__header f-6 mb-6">
                         <h2 class="d-none">Clínica BF Endodontia - <?= get_the_title(); ?></h2>
                         <p><?= get_the_title(); ?></p>
                     </div>
                     <!-- end of header -->

                     <!-- text -->
                      <div class="content__row__container__body__text t-justify">
                          <p>Certamente um dos maiores desafios da endodontia, quando acontecem acidentes como quebra de limas dentro do canal, com auxílio de microscopia operatória e os equipamentos adequados, conseguimos remover boa parte dos fragmentos, devolvendo total saúde ao elemento dental.</p>

                          <!-- row -->
                           <div class="content__row__container__body__text__row mt-7 grid-4">

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-rx-inicial', 'Imagem RX inicial com o fragmento de lima dentro do cana', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.1 - RX inicial com o fragmento de lima dentro do canal</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-fragmento-de-lima', 'Imagem fragmento de lima removido do canal', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.2 - Fragmento de lima removido do canal</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-conduto-obturado', 'Imagem conduto obturado com o material adequado', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.3 - Conduto obturado com o material adequado</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-aspecto-radiografico', 'Imagem aspecto radiográfico final', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.4 - Aspecto radiográfico final</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                           </div>
                          <!-- end of row -->
                      </div>
                     <!-- end of text -->
                 </div>
                 <!-- end of body -->
             </section>
             <!-- end of container -->

             <!-- sidebar -->
              <?= get_sidebar('treatments'); ?>
             <!-- end of sidebar -->

         </div>
        <!-- end of row -->

    </div>
</div>
<!-- end of content -->
