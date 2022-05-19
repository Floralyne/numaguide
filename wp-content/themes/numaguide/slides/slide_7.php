<?php

/**
 * Template Name: Slide 7
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_7">
        <div id="slide_7_c" class="container-fluid">
            <div id="slide_7_r" class="row vh-100">
                <div id="slide_7_div" class="col text-center mt-auto mb-auto p-5">
                    <div id="slide_7_bib" class="slide_7_bib">Bibliographie</div>
                    <div id="slide_7_livre_1" class="slide_7_livre"> 
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
                        <die var_dump>
                        echo render_block($paragraphes[0]);
?>
                    </div>
                    <div id="slide_7_livre_2" class="slide_7_livre">
                    <?php
                        echo render_block($paragraphes[1]);
?>  
                    </div>
                    <div id="slide_7_livre_3" class="slide_7_livre"><?php
                        echo render_block($paragraphes[2]);
?>  </div>
                    <div id="slide_7_livre_4" class="slide_7_livre"><?php
                        echo render_block($paragraphes[3]);
?>  </div>
                    <div id="slide_7_livre_5" class="slide_7_livre"><?php
                        echo render_block($paragraphes[4]);
?>  </div>
                </div>
            </div>
        </div>
</section>