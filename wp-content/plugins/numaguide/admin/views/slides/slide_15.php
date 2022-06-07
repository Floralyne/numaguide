<?php

/**
 * Template Name: Slide 15
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

    if (str_contains($video, 'youtube')) {
        $video = str_replace("watch?v=", "embed/", $video);
    } 
    else if (str_contains($video, 'dailymotion')) {
        $video = str_replace(".com/video", ".com/embed/video", $video);
    }
    else {
        $video = $video;
    }


?>

<section id="slide_15">
    <div id="slide_15_c" class="container-fluid">
        <div id="slide_15_r" class="row vh-100 p-5">
            <div class="embed-responsive">
                <iframe src=<?=$video?> class="embed-responsive-item"></iframe>
            </div>
        </div>
    </div>
</section>