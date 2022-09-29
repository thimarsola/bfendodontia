<?php
$whatsapp = whatsapp(formatPhone(CONTACT['whatsapp']['number']),CONTACT['whatsapp']['message'] . ' sobre a tecnologia: ' . get_the_title(), 'Saiba mais', 'btn btn-primary-500', 'Vamos conversar?') ;
$image = picture('teconologia-microscopio-operatorio', 'Clínica BF Endodontia | ' . get_the_title(), 'img-fluid');

$hero = file_get_contents(__DIR__ . '/../pages-hero.php');
$hero = str_replace('%title%', get_the_title(), $hero);
$hero = str_replace('%description%', 'Conheça mais sobre esta tecnologia utilizada pela clínica BF Endodontia', $hero);
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
                         <h2>Benefícios da microscopia</h2>
                     </div>
                     <!-- end of header -->

                     <!-- text -->
                      <div class="content__row__container__body__text t-justify">
                          <p>Maior visibilidade com aumento de até 40x, o que aumenta muito as chances de sucesso do tratamento proposto, seja ele com intuito de tratar, retratar e/ou consertar eventuais acidentes decorrentes de tratamentos anteriores, bem como a remoção mais precisa e com mínimo desgaste dentário, de peças protéticas que tenham esta necessidade. Há ainda indicações para outras áreas em que a visualização a olho nu ou lupas não conseguem resolver, por exemplo, a remoção de parafusos fraturados em implantes- situação que ocorre comumente.</p>
                          <br>
                          <p>O auxílio de microscopia operatória em procedimentos Cirúrgicos voltados à endo – Microcirurgia Parendodontica, Plastia apical e cirurgias exploratórias é imprescindível para o sucesso destas e visualização de áreas como o ápice, com a verificação de qualidade da obturação e exploração de espaços que não veríamos com nitidez da forma convencional.</p>
                          <br>
                          <p>A documentação fotográfica é um ponto forte deste projeto, pois o cliente volta ao seu indicador com todas as radiografias e fotografias impressas em laudo pós termino do procedimento.</p>
                      </div>
                     <!-- end of text -->
                 </div>
                 <!-- end of body -->
             </section>
             <!-- end of container -->

             <!-- image -->
              <div class="content__row__image">
                  <?= picture('imagem-beneficios-da-microscopia', 'Benefícios da microscopia', 'img-fluid'); ?>
              </div>
             <!-- end of image -->

         </div>
        <!-- end of row -->

    </div>
</div>
<!-- end of content -->
