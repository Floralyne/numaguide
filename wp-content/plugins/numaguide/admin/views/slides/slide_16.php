<?php

/**
 * Template Name: Slide 16
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

 <section id="slide_16">
        <div id="slide_16_c" class="container-fluid">
            <div id="slide_16_r" class="row vh-100 vw-100">
                <div id="slide_16_div1" class="row-5 text-center mt-auto mb-auto pt-5">
                    <div id="slide_16_video" class="embed-responsive">
                        <iframe src=<?=$video?> class="embed-responsive-item"></iframe>
                    </div>
                    <div id="slide_16_titre" class="text-center p-2">
                        <?php
                        $post_tab = $args['article'];
                        $post = $post_tab[0];
                        $blocks = parse_blocks($post->post_content);

                        $paragraphes = array();
                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                $paragraphes[] = $block;
                            }
                        }
                        echo render_block($paragraphes[0]);
                    ?>
                    </div>
                </div>
                <div class="row text-justify mt-auto mb-auto p-5">
                    <div id="slide_16_texte2" class="slide_16_texte">
                    <?php
                        echo render_block($paragraphes[1]);
                    ?>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>