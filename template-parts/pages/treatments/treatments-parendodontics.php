<?php
$whatsapp = whatsapp(formatPhone(CONTACT['whatsapp']['number']),CONTACT['whatsapp']['message'] . ' sobre o tratamento: ' . get_the_title(), 'Saiba mais', 'btn btn-primary-500', 'Vamos conversar?') ;
$image = picture('microcirurgia-parendodontica', 'Clínica BF Endodontia | ' . get_the_title(), 'img-fluid');

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
                          <p>É um recurso pouco utilizado pelos endodontistas, porém muito efetivo quando falamos de prognóstico (manter o dente em boca). Quando bem executado este procedimento tem capacidade de dar longevidade aos dentes e constitui em tratar ou retratar por via retrógrada, ou seja, de forma cirúrgica, região esta que permite inclusive remoção de cistos no final da raíz (condição que comumente vemos e muitos profissionais indicam extração e implantes). Muitas vezes lançamos mão deste procedimento para manutenção de uma prótese muito bem adaptada que necessitaria de retratamento de canal.</p>

                          <!-- row -->
                           <div class="content__row__container__body__text__row mt-7 grid-4">

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-secagem-do-conduto-por-via-retrograda', 'Imagem secagem do conduto por via retrógrada ', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.1 - Secagem do conduto por via retrógrada </small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-arredondamento-apical', 'Imagem arredondamento apical, devolvendo o aspecto de como seria o dente em condições normais', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.2 - Arredondamento apical, devolvendo o aspecto de como seria o dente em condições normais</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-preenchimento-do-canal', 'Imagem preenchimento do canal bom biomaterial (MTA) por via retrógrada ', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.3 - Preenchimento do canal bom biomaterial (MTA) por via retrógrada </small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-aspecto-final-da-obturacao-retrograda', 'Imagem aspecto final da obturação retrógrada', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.4 - Aspecto final da obturação retrógrada</small></figcaption>
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
