<!-- card -->
<article class="blog__row__card">
    <!-- image -->
    <div class="blog__row__card__image">
        <a href="<?= get_the_permalink(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>"
           target="_blank">
            <img src="<?= (!empty(get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : image('image-placeholder.svg', 'svg')); ?>"
                 alt="Veja esse nosso artigo sobre: <?= get_the_title(); ?>"
                 title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" class="img-fluid" loading="lazy">
        </a>
    </div>
    <!-- end of image -->

    <!-- content -->
    <div class="blog__row__card__content mt-5">
        <!-- header -->
        <header class="blog__row__card__content__header my-3">
            <h3 class="f-4">
                <a href="<?= get_the_permalink(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>"
                   class="link-neutral-500" target="_blank"><?= get_the_title(); ?></a>
            </h3>
        </header>
        <!-- end of header -->

        <!-- body -->
         <div class="blog__row__card__content__body">
             <p><small>Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></small></p>
         </div>
        <!-- end of body -->
    </div>
    <!-- end of content -->
</article>
<!-- end of card -->