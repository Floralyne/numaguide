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
        if ($block['blockName'] == 'core/video') {
            $video = substr($block['innerContent'][0], 52);
            $video = substr($video, 0, -19);
        }
    }
?>

    <section id="slide_27">
        <div id="slide_27_c" class="container-fluid">
            <div id="slide_27_r" class="row vh-100 p-5">
                    <video controls width="100%" height="100%" src=<?=$video?> allowfullscreen></video>
       
            </div>
        </div>

    </section>