<?php

/**
 * Template Name: Slide 27
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<?php
    $post_tab = $args['article'];
    $post = $post_tab[0];
    $blocks = parse_blocks($post->post_content);
    $video = '';
    foreach ($blocks as $block) {
        if ($block['blockName'] == 'core/embed') {
            $video = $block['attrs']['url'];
        }
    }
?>

    <section id="slide_27">
        <div id="slide_27_c" class="container-fluid">
            <div id="slide_27_r" class="row vh-100 p-5">
                    <figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
                    <?=$video?>
</div></figure>
            </div>
        </div>

    </section>