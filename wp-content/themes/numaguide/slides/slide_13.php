<?php

/**
 * Template Name: Slide 13
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
        $paragraphe = substr($block['innerContent'][0], 4);
        $paragraphe = substr($paragraphe, 0, -5);
        $paragraphes[] = $paragraphe;
        }
    }
?>

    <section id="slide_13">
        <div id="slide_13_c" class="container-fluid">
            <div id="slide_13_r" class="row vh-100">
                <div id="slide_13_div" class="col text-justify mt-auto mb-auto p-5">
                    <div id="slide_13_titre_principal" class="slide_13_titre">       
                        <p>Titre :    
                        <?php
                            echo $paragraphes[0];
                        ?>
                        </p>
                    </div>
                    <div id="slide_13_sous_titre" class="slide_13_sous_titre">
                    <p>Sous-titre :    
                        <?php
                            echo $paragraphes[1];
                        ?>
                        </p>
                    </div>
                    <div id="slide_13_auteur" class="slide_13_auteur">
                    <p>Auteur(s) :    
                        <?php
                           echo $paragraphes[2];
                        ?>
                        </p>
                    </div>
                    <div id="slide_13_aff" class="slide_13_aff">
                    <p>Affiliations :    
                        <?php
                            echo $paragraphes[3];
                        ?>
                        </p>
                    </div>
                    <div id="slide_13_clef" class="slide_13_clef">
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
