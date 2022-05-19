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
                <div id="slide_8_div" class="col text-center mt-auto mb-auto p-5">
                    <div id="slide_8_titre_principal" class="slide_8_titre">
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
                    <div id="slide_8_sous_titre" class="slide_8_sous_titre">
                    <?php
                        echo render_block($paragraphes[1]);
?>  
                    </div>
                    <div id="slide_8_auteur" class="slide_8_auteur"> 
                    <?php
                        echo render_block($paragraphes[2]);
?>  
                    </div>
                </div>
            </div>
        </div>
</section>