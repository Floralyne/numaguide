<?php get_header() ?>

<main id="site-content">

    <?php
        $info_slide = array('slide24', 'slides/slide_24');
        $slide = apply_filters('ng_article_pour_template', $info_slide);
        apply_filters('ng_creer_guide','amelie big brain 12', $slide);
    ?>

</main>

<?php get_footer() ?>