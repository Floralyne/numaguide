<?php

/**
 * Template Name: Slide 25
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<?php
    $post_tab = $args['article'];
    $post = $post_tab[0];
    $blocks = parse_blocks($post->post_content);
    $audio = '';
    foreach ($blocks as $block) {
        if ($block['blockName'] == 'core/audio') {
            $audio = substr($block['innerContent'][0], 52);
            $audio = substr($audio, 0, -19);
        }
    }
?>

    <section id="slide_25">
        <div id="slide_25_c" class="container-fluid">
            <div id="slide_25_r" class="row vh-100">
                <div id="slide_25_div1" class="row text-justify mt-auto mb-auto p-5">
                    <div id="slide_25_texte1" class="slide_25_texte">
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
                <div id="slide_25_son" class="row text-center mt-auto mb-auto p-5 embed-responsive embed-responsive-4by3">
                    <audio controls class="embed-responsive-item">
                        <source src=<?=$audio?>>
                    </audio>
                    <div id="slide_25_son_legende" class="text-center p-2"><?php
                        echo render_block($paragraphes[1]);
                    ?></div>
                </div>
            </div>
        </div>
        </div>
    </section>