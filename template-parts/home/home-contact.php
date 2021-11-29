<section id="contato" class="contact py-s bg-light-gray-500">
    <div class="container">

        <!-- header -->
        <?= title('contact__header', '06', 'Contato', 'Vamos conversar'); ?>
        <!-- end of header -->

        <!-- map -->
        <div class="contact__map mt-6">
            <iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36556977620539687!2d-4657071568502128!3d-23.61516998465621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5de9465370d3%3A0x44b9ef6634cfaec7!2sBF%20Endodontia%20Especializada!5e0!3m2!1spt-BR!2sbr!4v1637859253843!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- end of map -->

        <!-- row -->
         <div class="contact__row grid mt-8">

             <!-- content -->
              <div class="contact__row__content">
                   <!-- card -->
                    <article class="contact__row__content__card mb-2">
                        <!-- header -->
                         <header class="contact__row__content__card__header mb-1">
                             <h3 class="clr-primary-500 t-uppercase">Endereço</h3>
                         </header>
                        <!-- end of header -->

                        <a rel="nofollow noreferrer noopener" class="link-neutral-500" href="<?= CONTACT['addressLink']; ?>"
                           title="Venha conhecer a Clínica BF Endodontia" target="_blank"><?= CONTACT['address']; ?></a>
                    </article>
                   <!-- end of card -->

                   <!-- card -->
                    <article class="contact__row__content__card mb-2">
                        <!-- header -->
                         <header class="contact__row__content__card__header mb-1">
                             <h3 class="clr-primary-500 t-uppercase">Telefones</h3>
                         </header>
                        <!-- end of header -->

                        <ul>
                            <?php foreach (CONTACT['phone'] as $phone => $item): ?>
                                <li>
                                    <a rel="nofollow noreferrer noopener" class="link-neutral-500" href="tel:<?= formatPhone
                                    ($item); ?>"
                                       title="Ligue agora para a Clínica BF Endodontia" target="_blank"><?= $item;
                                       ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </article>
                   <!-- end of card -->

                  <!-- card -->
                  <article class="contact__row__content__card mb-2">
                      <!-- header -->
                      <header class="contact__row__content__card__header mb-1">
                          <h3 class="clr-primary-500 t-uppercase">E-mail</h3>
                      </header>
                      <!-- end of header -->

                      <a rel="nofollow noreferrer noopener" class="link-neutral-500" href="mailto:<?=
                      CONTACT['mail']; ?>"
                         title="Envie um e-mail para a Clínica BF Endodontia" target="_blank"><?= CONTACT['mail'];
                         ?></a>
                  </article>
                  <!-- end of card -->

                  <!-- card -->
                  <article class="contact__row__content__card mb-2">
                      <!-- header -->
                      <header class="contact__row__content__card__header mb-1">
                          <h3 class="clr-primary-500 t-uppercase">Funcionamento</h3>
                      </header>
                      <!-- end of header -->

                      <p>Segunda a Sexta: das  09h às 19h</p>
                      <p>Sabádos: das  09h às 12h</p>
                  </article>
                  <!-- end of card -->
              </div>
             <!-- end of content -->

             <!-- form -->
              <div class="contact__form">
                  <form id="form" method="post" enctype="multipart/form-data" autocomplete="off">

                      <!-- group -->
                      <div class="contact__form__group mb-3">
                          <label for="name" class="d-none">Nome</label>
                          <input type="text" name="name" placeholder="Nome" id="name" required>
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__form__group mb-3">
                          <label for="mail" class="d-none">E-mail</label>
                          <input type="email" name="mail" placeholder="E-mail" id="mail" required>
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__form__group mb-3">
                          <label for="subject" class="d-none">Endereço</label>
                          <input type="text" name="subject" placeholder="Assunto" id="subject" required>
                      </div>
                      <!-- end of group -->

                      <!-- group -->
                      <div class="contact__form__group mb-3">
                          <label for="message" class="d-none">Mensagem</label>
                          <textarea name="message" id="message" cols="50" rows="3" placeholder="Mensagem"></textarea>
                      </div>
                      <!-- end of group -->

                      <!-- status -->
                      <div class="contact__form__status mb-1 d-none">
                          <div class="contact__form__status--loading t-center f-5 a-rotate">
                              <i class="icon-spinner clr-primary-500"></i>
                          </div>
                      </div>
                      <!-- end of status -->

                      <!-- button -->
                      <div class="contact__form__button t-center">
                          <button id="button-contact" class="btn btn-block btn-primary-500" type="submit" name="submit"
                                  value="submit">Enviar</button>
                      </div>
                      <!-- end of button -->

                  </form>

              </div>
             <!-- end of form -->

         </div>
        <!-- end of row -->
    </div>
</section>