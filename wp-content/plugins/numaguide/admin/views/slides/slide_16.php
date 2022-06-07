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
            <div id="slide_16_r" class="vh-100">
                <div id="slide_16_div1" class="row text-center mt-auto mb-auto pt-5 mr-5 ml-5 justify-content-center">
                        <iframe src=<?=$video?> class="mt-auto mb-auto" id="slide_16_video"></iframe>
                </div>
                <div id="slide_16_titre" class="row text-center m-3 justify-content-center">
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
                <div id="slide_16_texte_div" class="row text-justify mt-auto mb-auto p-5">
                    <div id="slide_16_texte2" class="slide_16_texte">
                    <?php
                        echo render_block($paragraphes[1]);
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>