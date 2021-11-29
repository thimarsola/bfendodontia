<section id="equipe" class="team py-s">
    <div class="container">

        <!-- header -->
        <?= title('team__header', '04', 'Equipe', 'Conheça mais sobre'); ?>
        <!-- end of header -->

        <!-- row -->
        <div class="team__row grid">
            <?php
            $jsonTeam = file_get_contents(__DIR__ . '/../../includes/team.json');
            $teamList = json_decode($jsonTeam, true);

            $i = 1;
            $length = count($teamList['team']);
            foreach ($teamList['team'] as $user):
                ?>

                <!-- card -->
                <article class="team__row__card">
                    <!-- image -->
                    <div class="team__row__card__image">
                        <?php
                        if($i === 1){
                            $social = true;
                        }else{
                            $social = false;
                        }

                        $i++;

                        echo picture($user['image'], 'Conheça mais sobre o ' . $user['name'], 'img-fluid');
                        ?>

                        <?php if($social === true): ?>
                        <!-- social -->
                        <div class="team__row__card__image__social">
                            <ul class="bg-primary-500">
                                <li class="link-white-500">
                                    <a rel="nofollow noreferrer noopener" href="#" title="Conheça o Facebook do <?= 
                                    $user['name']; ?>" target="_blank"><i class="icon-facebook"></i></a>
                                </li>
                                <li class="link-white-500">
                                    <a rel="nofollow noreferrer noopener" href="#" title="Conheça o Facebook do <?=
                                    $user['name']; ?>" target="_blank"><i class="icon-instagram"></i></a>
                                </li>
                                <li class="link-white-500">
                                    <a rel="nofollow noreferrer noopener" href="#" title="Conheça o Facebook do <?=
                                    $user['name']; ?>" target="_blank"><i class="icon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- end of social -->
                        <?php endif; ?>
                    </div>
                    <!-- end of image -->

                    <!-- content -->
                     <div class="team__row__card__content">
                         <!-- header -->
                         <header class="team__row__card__content__header mb-6">
                             <h3 class="f-6"><?= $user['name']; ?></h3>
                         </header>
                         <!-- end of header -->

                         <!-- body -->
                          <div class="team__row__card__content__body">
                              <?php foreach ($user['description'] as $desc): ?>
                              <p><?= $desc; ?></p>
                              <?php endforeach; ?>
                          </div>
                         <!-- end of body -->
                     </div>
                    <!-- end of content -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>