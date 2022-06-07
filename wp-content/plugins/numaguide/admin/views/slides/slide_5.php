<?php

/**
 * Template Name: Slide 5
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_5">
    <div id="slide_5_c" class="container-fluid">
        <div id="slide_5_r" class="row vh-100">
            <div id="slide_5_div" class="col text-center mt-auto mb-auto p-5">
                <div id="slide_5_titre" class="slide_5_titre">            
                    Introduction :
                </div>
                <div id="slide_5_intro" class="slide_5_intro">
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