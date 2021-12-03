<!-- card -->
<article class="blog__row__last__row__card">
    <!-- image -->
    <div class="blog__row__last__row__card__image mb-4">
        <a href="<?= get_the_permalink(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>"
           target="_blank">
            <img src="<?= (!empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : image('image-placeholder.svg', 'svg')); ?>" alt="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" class="img-fluid" loading="lazy">
        </a>
    </div>
    <!-- end of image -->

    <!-- body -->
    <div class="blog__row__last__row__card__body t-justify">
        <p class="mb-1"><small>Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></small></p>

        <!-- header -->
        <header class="blog__row__last__row__card__body__header mb-4 t-left">
            <h3 class="f-4 link-gray-500">
                <a class="" href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
                    <?= get_the_title(); ?>
                </a>
            </h3>
        </header>
        <!-- end of header -->

        <?php the_excerpt(); ?>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->