<?php
$whatsapp = whatsapp(formatPhone(CONTACT['whatsapp']['number']),CONTACT['whatsapp']['message'] . ' sobre o tratamento: ' . get_the_title(), 'Saiba mais', 'btn btn-primary-500', 'Vamos conversar?') ;
$image = picture('pino-de-fibra-de-vidro', 'Clínica BF Endodontia | ' . get_the_title(), 'img-fluid');

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
                          <p>Muitos indicadores gostam e nos pedem a instalação dos mesmos após o término do tratamento endodôntico, isso garante agilidade no tratamento que vêm na sequência e evita futuras contaminações oriundas da saliva. O pino de fibra, como o pino metálico dão a base e sustentação para a peça protética que vem em cima do dente.</p>

                          <!-- row -->
                           <div class="content__row__container__body__text__row mt-7 grid-3">

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-dente-preparado-para-a-instalacao-do-pino', 'Imagem dente preparado para a instalação do pino', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.1 - Dente preparado para a instalação do pino</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-condicionamento-da-dentina-para-posterior-aplicacao', 'Imagem condicionamento da dentina para posterior aplicação', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.2 - Condicionamento da dentina para posterior aplicação</small></figcaption>
                                    </figure>
                                </div>
                               <!-- end of image -->

                               <!-- image -->
                                <div class="content__row__container__body__text__row__image">
                                    <figure>
                                        <?= picture('imagem-pino-de-fibra-de-vidro', 'Imagem pino de fibra e preenchimento colocados em posição, garantindo maior resistência do dente em questão', 'img-fluid'); ?>
                                        <figcaption class="mt-2"><small>Fig.3 - Pino de fibra e preenchimento colocados em posição, garantindo maior resistência do dente em questão</small></figcaption>
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
