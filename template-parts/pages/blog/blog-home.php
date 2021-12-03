<!-- blog -->
<div id="blog" class="blog py-s">
    <div class="container">
        <!-- header -->
         <header class="blog__header">
             <h2 class="d-none">Clínica BF Endodontia | <?=  get_the_title(); ?></h2>
         </header>
        <!-- end of header -->

        <!-- row -->
        <div class="blog__row <?= (!is_paged() ? 'grid' : 'grid-layout'); ?>">

            <!-- posts -->
            <section class="blog__row__last">
                    <!-- header -->
                    <header class="blog__row__last__header d-none">
                        <h2>Últimas Publicações</h2>
                    </header>
                    <!-- end of header -->

                    <!-- row -->
                    <div class="blog__row__last__row grid">
                        <?php
                        $pagedLast = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                        $argLast = [
                            'post_type' => 'post',
                            'post__not_in' => get_option('sticky_posts'),
                            'posts_per_page' => 6,
                            "order" => 'DESC',
                            'paged' => $pagedLast
                        ];

                        $theQueryLast = new WP_Query($argLast);

                        if($theQueryLast->have_posts()){
                            while ($theQueryLast->have_posts()){
                                $theQueryLast->the_post();
                                get_template_part('template-parts/pages/blog/content', 'blog');
                            }

                        }else{
                            echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                    <!-- end of row -->

                    <!-- pagination -->
                    <div class="blog__row__last__pagination mt-5">
                        <nav class="pagination__nav">
                            <h2 class="d-none">Menu de Paginação</h2>

                            <?php
                            $big = 999999999; // need an unlikely integer

                            $pages = pagination(
                                [
                                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                    'format' => '?paged=%#%',
                                    'current' => max(1, get_query_var('paged')),
                                    'total' => $theQueryLast->max_num_pages,
                                    'mid_size' => 3,
                                    'end_size' => 1,
                                    'prev_text' => '&laquo;',
                                    'next_text' => '&raquo;',
                                    'type' => 'array',
                                ]
                            );

                            if (is_array($pages)) {
                                echo '<ul class="pagination__nav__list">';
                                foreach ($pages as $page) {
                                    echo "<li class='pagination__nav__list__item'>$page</li>";
                                }
                                echo '</ul>';
                            }
                            ?>
                        </nav>
                    </div>
                    <!-- end of pagination -->
            </section>
            <!-- end of posts -->

            <?php if(!is_paged()): ?>
            <!-- highlights -->
             <section class="blog__row__highlights">

                 <!-- header -->
                  <header class="blog__row__highlights__header mb-3">
                      <h2 class="f-4">Destaques</h2>
                  </header>
                 <!-- end of header -->

                 <!-- row -->
                 <div class="blog__row__highlights__row grid">
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
                             get_template_part('template-parts/pages/blog/content', 'highlights');
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
            <?php endif; ?>
        </div>
        <!-- end of row -->

    </div>
</div>
<!-- end of blog -->
