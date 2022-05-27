<?php

/**
 * Template Name: Slide 8
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_8">
    <div id="slide_8_c" class="container-fluid">
        <div id="slide_8_r" class="row vh-100">
            <div id="slide_8_div1" class="row text-justify mt-auto mb-auto p-5 ml-auto mr-auto">
                <div id="slide_8_texte1" class="slide_8_texte">
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
            <div class="row text-justify mt-auto mb-auto p-5 ml-auto mr-auto">
                <div id="slide_8_texte2" class="slide_8_texte">
                    <?php echo render_block($paragraphes[1]); ?>
                </div>
            </div>
        </div>
    </div>
</section>