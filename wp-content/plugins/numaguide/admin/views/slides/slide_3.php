<?php

/**
 * Template Name: Slide 3
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_3">
    <div id="slide_3_c" class="container-fluid">
        <div id="slide_3_r" class="row vh-100">
            <div id="slide_3_div" class="col text-center mt-auto mb-auto p-5">
                <div id="slide_3_titre" class="slide_3_titre"> 
               Remerciements
                </div>
                <div id="slide_3_merci" class="slide_3_merci">
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
        </div>
    </div>
</section>