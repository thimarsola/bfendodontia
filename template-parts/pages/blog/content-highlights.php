<!-- card -->
<article class="blog__row__highlights__row__card d-flex ai-center">
    <!-- image -->
    <div class="blog__row__highlights__row__card__image">
        <img src="<?= (!empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : image('image-placeholder.svg', 'svg')); ?>" alt="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" class="img-fluid" loading="lazy">
    </div>
    <!-- end of image -->

    <!-- body -->
    <div class="blog__row__highlights__row__card__body">
        <!-- header -->
        <header class="blog__row__highlights__row__card__body__header mb-2">
            <h3 class="f-3 link-gray-500">
                <a href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
                    <?= get_the_title(); ?>
                </a>
            </h3>
        </header>
        <!-- end of header -->

        <p><small>Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></small></p>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->