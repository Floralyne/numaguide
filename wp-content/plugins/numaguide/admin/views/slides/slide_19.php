<?php

/**
 * Template Name: Slide 19
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_19">
    <div id="slide_19_c" class="container-fluid">
        <div id="slide_19_r" class="row vh-100">
            <div id="slide_19_div" class="col text-center mt-auto mb-auto p-5">
                <div id="slide_19_livre_1" class="slide_19_livre">
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
                <div id="slide_19_livre_2" class="slide_19_livre">
                    <?php
                        echo render_block($paragraphes[1]);
                    ?>
                </div>
                <div id="slide_19_livre_3" class="slide_19_livre">
                    <?php
                        echo render_block($paragraphes[2]);
                    ?>
                </div>
                <div id="slide_19_livre_4" class="slide_19_livre">
                    <?php
                        echo render_block($paragraphes[3]);
                    ?>
                </div>
                <div id="slide_19_livre_5" class="slide_19_livre">
                    <?php
                        echo render_block($paragraphes[4]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>