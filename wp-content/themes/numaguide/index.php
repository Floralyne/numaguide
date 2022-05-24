<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide13', 'slides/slide_13');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','Slide 13', $slide);
    ?>

</main>

<?php get_footer() ?>