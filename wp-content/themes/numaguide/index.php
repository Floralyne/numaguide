<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide18', 'slides/slide_18');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','Slide 18 gone 11', $slide);
    ?>

</main>

<?php get_footer() ?>