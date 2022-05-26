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
    $audio = '';
    foreach ($blocks as $block) {
        if ($block['blockName'] == 'core/audio') {
            $audio = substr($block['innerContent'][0], 52);
            $audio = substr($audio, 0, -19);
        }
    }
?>

    <section id="slide_13">
        <div id="slide_13_c" class="container-fluid">
            <div id="slide_13_r" class="row vh-100">
                <div id="slide_13_div1" class="row text-justify mt-auto mb-auto p-5 ml-auto mr-auto">
                    <div id="slide_13_texte1" class="slide_13_texte">
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
                <div id="slide_13_son" class="row text-center mt-auto mb-auto p-5 embed-responsive ml-auto mr-auto">
                    <audio controls class="embed-responsive-item" id="son1">
                        <source src=<?=$audio?>>
                    </audio>
                    <div id="slide_13_son_legende" class="text-center p-2"><?php
                        echo render_block($paragraphes[1]);
                    ?></div>
                </div>
            </div>
        </div>
        </div>
    </section>