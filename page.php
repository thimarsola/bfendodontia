<?php get_header(); ?>

<?php
    if(is_page('Tratamento e Retratamento Endodôntico')){
        get_template_part('template-parts/pages/treatments/treatments', 'endodontic');
    }elseif (is_page('Remoção de Instrumento Fraturado')){
        get_template_part('template-parts/pages/treatments/treatments', 'removal');
    }elseif (is_page('Pino de Fibra de Vidro')){
        get_template_part('template-parts/pages/treatments/treatments', 'installation');
    }elseif (is_page('Microcirurgia Parendodontica')){
        get_template_part('template-parts/pages/treatments/treatments', 'parendodontics');
    }elseif (is_page('Microscópio Operatório')){
        get_template_part('template-parts/pages/microscope/microscope', 'home');
    }elseif (is_page('Blog')){
        get_template_part('template-parts/pages/blog/blog', 'home');
    }
?>

<?php get_footer(); ?>