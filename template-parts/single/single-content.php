<!-- cover -->
<div class="cover">
    <img class="img-fluid" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
</div>
<!-- end of cover -->

<div class="content py-s">
    <div class="container">

        <!-- row -->
         <div class="content__row grid">

             <!-- post -->
              <section class="content__row__post">

                  <!-- header -->
                   <header class="content__row__post__header mb-6 f-6">
                       <h2><?= get_the_title(); ?></h2>
                   </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="content__row__post__body t-justify mb-10">
                       <?= get_the_content(); ?>
                   </div>
                  <!-- end of body -->

                  <!-- share -->
                   <div class="content__row__post__share">
                       <hr>

                       <!-- links -->
                        <div class="content__row__post__share__links mt-5 d-flex ai-center">
                            <p>Compartilhe:</p>

                            <ul>
                                <li>
                                    <a rel="nofollow noreferrer noopener" href="https://www.facebook.com/sharer.php?u=<?= urlencode(get_the_permalink()); ?>&t=<?= urlencode(get_the_title()); ?>" target="_blank" title="Compartilhe esse artigo no Facebook"><i class="icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a rel="nofollow noreferrer noopener" href="https://twitter.com/share?text=<?= urlencode(get_the_title()); ?>&url=<?= urlencode(get_the_permalink()); ?>" target="_blank" title="Compartilhe esse artigo no Twitter"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a rel="nofollow noreferrer noopener" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(get_the_permalink()); ?>&title=<?= urlencode(get_the_title()); ?>" target="_blank" title="Compartilhe esse artigo no Linkedin"><i class="icon-linkedin"></i></a>
                                </li>
                                <li>
                                    <a rel="nofollow noreferrer noopener" href="whatsapp://send?text=<?= urlencode("Olá gostaria de compartilhar esse artigo escrito pela Clínica BF Endodontia com você! ") . urlencode(get_the_permalink()); ?>" target="_blank" title="Compartilhe esse artigo no WhatsApp"><i class="icon-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                       <!-- end of links -->
                   </div>
                  <!-- end of share -->

              </section>
             <!-- end of post -->

             <!-- highlights -->
             <section class="content__row__highlights">

                 <!-- header -->
                 <header class="content__row__highlights__header mb-3">
                     <h2 class="f-4">Destaques</h2>
                 </header>
                 <!-- end of header -->

                 <!-- row -->
                 <div class="content__row__highlights__row grid">
                     <?php
                     $argHighlights = [
                         'post_type' => 'post',
                         'posts_per_page' => 4,
                         'post__in' => get_option('sticky_posts'),
                         'ignore_sticky_posts' => 1,
                         'order' => 'DESC'
                     ];

                     $theQueryHighlights = new WP_Query($argHighlights);

                     if($theQueryHighlights->have_posts()){
                         while ($theQueryHighlights->have_posts()){
                             $theQueryHighlights->the_post();
                             get_template_part('template-parts/single/content', 'highlights');
                         }

                     }else{
                         echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
                     }
                     wp_reset_postdata();
                     ?>
                 </div>
                 <!-- end of row -->

             </section>
             <!-- end of highlights -->

         </div>
        <!-- end of row -->

    </div>
</div>