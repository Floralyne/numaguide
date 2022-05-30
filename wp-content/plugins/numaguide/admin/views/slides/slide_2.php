<?php

/**
 * Template Name: Slide 2
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<?php
    $post_tab = $args['article'];
    $post = $post_tab[0];
    $blocks = parse_blocks($post->post_content);
    $paragraphes = array();

    foreach ($blocks as $block) {
    if ($block['blockName'] == 'core/paragraph') {
        $paragraphe = $block['innerContent'][0];
        $paragraphes[] = $paragraphe;
        }
    }
?>

    <section id="slide_2">
        <div id="slide_2_c" class="container-fluid">
            <div id="slide_2_r" class="row vh-100">
                <div id="slide_2_div" class="col text-center mt-auto mb-auto p-5">
                    <div id="slide_2_titre_principal" class="slide_2_titre">       
                        <p>Titre :    
                        <?php
                            echo $paragraphes[0];
                        ?>
                        </p>
                    </div>
                    <div id="slide_2_sous_titre" class="slide_2_sous_titre">
                    <p>Sous-titre :    
                        <?php
                            echo $paragraphes[1];
                        ?>
                        </p>
                    </div>
                    <div id="slide_2_auteur" class="slide_2_auteur">
                    <p>Auteur(s) :    
                        <?php
                           echo $paragraphes[2];
                        ?>
                        </p>
                    </div>
                    <div id="slide_2_aff" class="slide_2_aff">
                    <p>Affiliations :    
                        <?php
                            echo $paragraphes[3];
                        ?>
                        </p>
                    </div>
                    <div id="slide_2_clef" class="slide_2_clef">
                       <p>Mots-clés :    
                        <?php
                            echo $paragraphes[4];
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
