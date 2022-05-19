<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide20', 'slides/slide_20');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','Slide 20 bis', $slide);
    ?>

</main>

<?php get_footer() ?>