<?php

/**
 * Template Name: Slide 12
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_12">
    <div id="slide_12_c" class="container-fluid">
        <div id="slide_12_r" class="row vh-100">
            <div id="slide_12_div" class="col text-center mt-auto mb-auto p-5">
                <div id="slide_12_titre" class="slide_12_titre"> 
               Remerciements
                </div>
                <div id="slide_12_merci" class="slide_12_merci">
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