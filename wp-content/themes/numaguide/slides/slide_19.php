<?php

/**
 * Template Name: Slide 19
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<?php
    $post_tab = $args['article'];
    $post = $post_tab[0];
    $blocks = parse_blocks($post->post_content);
    $link = '';
    foreach ($blocks as $block) {
        if ($block['blockName'] == 'core/image') {
            $link = substr($block['innerHTML'], 51);
            $link = substr($link, 0, -39);
        }
    }
?>

<section id="slide_19">
    <div id="slide_19_c" class="container-fluid">
        <div id="slide_19_r" class="row vh-100">
            <div id="slide_19" class="col text-center m-auto">
                <img id="slide_19_image" class="img-fluid" src=<?=$link?>>
            </div>
        </div>
    </div>
</section>