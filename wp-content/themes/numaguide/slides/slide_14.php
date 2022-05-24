<?php

/**
 * Template Name: Slide 14
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

    <section id="slide_14">
        <div id="slide_14_c" class="container-fluid">
            <div id="slide_14_r" class="row vh-100">
                <div id="slide_14_div" class="col text-center mt-auto mb-auto p-5">
                    <div id="slide_14_titre" class="slide_14_titre">            
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
                    <div id="slide_14_intro" class="slide_14_intro">
                        <?php
                            echo render_block($paragraphes[1]);
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>