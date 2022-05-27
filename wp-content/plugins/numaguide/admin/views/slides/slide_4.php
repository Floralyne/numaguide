<?php

/**
 * Template Name: Slide 4
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_4">
        <div id="slide_4_c" class="container-fluid">
            <div id="slide_4_r" class="row vh-100">
                <div id="slide_4_div" class="col text-center mt-auto mb-auto p-5">
                    <div id="slide_4_titre" class="slide_4_titre">Résumé :</div>
                    <div id="slide_4_resume" class="slide_4_resume">
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
?></div>
                </div>
            </div>
        </div>
</section>