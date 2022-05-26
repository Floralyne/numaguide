<?php

/**
 * Template Name: Slide 17
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


<section id="slide_17">
        <div id="slide_17_c" class="container-fluid">
            <div id="slide_17_r" class="row vh-100">
                <div id="slide_17_div1" class="col text-justify mt-auto mb-auto p-5">
                    <div id="slide_17_texte1" class="slide_17_texte">
                    <?php
                        $post_tab = $args['article'];
                        $post = $post_tab[0];
                        $blocks = parse_blocks($post->post_content);

                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                echo render_block($block);
                            }
                        }
                        
                    ?>
                    </div>
                </div>
                <div id="slide_17_div2" class="col text-center mt-auto mb-auto p-5">
                        <iframe width="100%" height="100%" src=<?=$video?> allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
</section>