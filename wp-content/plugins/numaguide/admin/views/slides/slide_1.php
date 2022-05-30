<?php

/**
 * Template Name: Slide 1
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_1">
        <div id="slide_1_c" class="container-fluid">
            <div id="slide_1_r" class="row vh-100">
                <div id="slide_1_div" class="col text-center mt-auto mb-auto p-5">
                    <div id="slide_1_titre_principal" class="slide_1_titre">
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
                    <div id="slide_1_sous_titre" class="slide_1_sous_titre">
                    <?php
                        echo render_block($paragraphes[1]);
?>  
                    </div>
                    <div id="slide_1_auteur" class="slide_1_auteur"> 
                    <?php
                        echo render_block($paragraphes[2]);
?>  
                    </div>
                </div>
            </div>
        </div>
</section>