<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide27', 'slides/slide_27');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','Mission Debug 7', $slide);
    ?>

</main>

<?php get_footer() ?>