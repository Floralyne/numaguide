<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide23', 'slides/slide_23');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','video full screen2364', $slide);
    ?>

</main>

<?php get_footer() ?>