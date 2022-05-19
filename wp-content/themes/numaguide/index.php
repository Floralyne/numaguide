<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide19', 'slides/slide_19');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','Slide CRAST TEST TEST TEST TEST TEST TEST TEst', $slide);
    ?>

</main>

<?php get_footer() ?>