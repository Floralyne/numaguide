<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide25', 'slides/slide_25');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','audio test 2', $slide);
    ?>

</main>

<?php get_footer() ?>