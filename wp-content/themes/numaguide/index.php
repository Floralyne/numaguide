<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide22', 'slides/slide_22');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','Slide 22 gone 11', $slide);
    ?>

</main>

<?php get_footer() ?>