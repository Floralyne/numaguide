<?php

/**
 * Template Name: Slide 13
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>
    <section id="slide_13">
        <div id="slide_13_c" class="container-fluid">
            <div id="slide_13_r" class="row vh-100">
                <div id="slide_13_div" class="col text-justify mt-auto mb-auto p-5">
                    <div id="slide_13_titre_principal" class="slide_13_titre">           
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
                    <div id="slide_13_sous_titre" class="slide_13_sous_titre">
                        Sous-titre : <i><?php echo render_block($paragraphes[1]);?></i>
                    </div>
                    <div id="slide_13_auteur" class="slide_13_auteur">
                        Auteur(s) : <?php echo render_block($paragraphes[2]);?>
                    </div>
                    <div id="slide_13_aff" class="slide_13_aff">
                        Affiliation(s) : <?php echo render_block($paragraphes[3]);?>
                    </div>
                    <div id="slide_13_clef" class="slide_13_clef">
                        Mots-clés : <?php echo render_block($paragraphes[4]);?>
                    </div>

                </div>
            </div>
        </div>
    </section>
