<aside class="content__row__sidebar">
    <!-- container -->
     <div class="content__row__sidebar__container">
         <!-- header -->
         <header class="content__row__sidebar__container__header mb-3">
             <h2 class="f-4 clr-primary-500">Conheça também:</h2>
         </header>
         <!-- end of header -->

         <ul>
             <?php
             $pages = get_pages(['sort_order' => 'acs', 'exclude' => [17, 15]]);
             foreach ($pages as $page):
                 ?>
                 <li class="<?= $page->post_title  == get_the_title() ? "link-primary-500" : 'link-neutral-500'?>">
				<span>
                    <a href="<?= $page->guid; ?>" title="Clínica BF Endodontia | <?= $page->post_title; ?>" target="_blank"><?= $page->post_title; ?></a>
				</span>
                 </li>

             <?php endforeach; ?>
         </ul>
     </div>
    <!-- end of container -->
</aside>