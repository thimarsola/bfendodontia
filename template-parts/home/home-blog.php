<section class="blog py-s">
    <div class="container">

        <!-- header -->
        <?= title('blog__header', '07', 'Blog', 'Conheça mais') ?>
        <!-- end of header -->

        <!-- row -->
        <div class="blog__row grid">
            <?php

            $argBlog = [
                'post_type' => 'post',
                'post__in' => get_option('sticky_posts'),
                'ignore_sticky_posts' => 1,
                'posts_per_page' => 3,
                'order' => 'DESC'
            ];

            $theQueryBlog = new WP_Query($argBlog);

            if ($theQueryBlog->have_posts()) {
                while ($theQueryBlog->have_posts()) {
                    $theQueryBlog->the_post();
                    get_template_part('template-parts/home/content', 'blog');
                }
            } else {
                echo '<p>' . _e('Não existem artigos publicados no momento') . '</p>';
            }

            wp_reset_postdata();

            ?>
        </div>
        <!-- end of row -->
    </div>
</section>