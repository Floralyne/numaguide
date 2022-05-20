<?php

/**
 * Template Name: Slide 24
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

 <section id="slide_24">
        <div id="slide_24_c" class="container-fluid">
            <div id="slide_24_r" class="row vh-100 vw-100">
                <div id="slide_24_div1" class="row-5 text-center mt-auto mb-auto pt-5">
                    
                    <div id="slide_24_video" class="embed-responsive embed-responsive-21by9">
                        <iframe width="100%" height="100%" class="embed-responsive-item" src=<?=$video?> allowfullscreen></iframe>
                      </div>
                      <div id="slide_24_titre" class="text-center p-2"> <?php
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
                    ?></div>
                </div>
                <div class="row text-justify mt-auto mb-auto p-5">
                    <div id="slide_24_texte2" class="slide_24_texte">
                    <?php
                        echo render_block($paragraphes[1]);
                    ?></div>
                </div>
            </div>
        </div>
        </div>

    </section>