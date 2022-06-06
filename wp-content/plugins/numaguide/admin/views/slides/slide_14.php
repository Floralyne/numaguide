<?php

/**
 * Template Name: Slide 14
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<?php
    $post_tab = $args['article'];
    $post = $post_tab[0];
    $blocks = parse_blocks($post->post_content);

    $audios = array();
    foreach ($blocks as $block) {
        if ($block['blockName'] == 'core/audio') {
            $audio = trim($block['innerContent'][0]);
            $audio = substr($audio, 52);
            $audio = substr($audio, 0, -19);
            $audios[] = $audio;
        
        }
    }
?>

    <section id="slide_14">
        <div id="slide_14_c" class="container-fluid">
            <div id="slide_14_r" class="row vh-100">
                <div id="slide_14_son1" class="row text-center mt-auto mb-auto p-5 embed-responsive ml-auto mr-auto">
                    <audio controls class="embed-responsive-item" id="son1">
                    <source src=<?=$audios[0]?>>
                    </audio>
                    <div id="slide_14_son_legende1" class="text-center p-2"><?php
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
                    ?></div>
                </div>
                <div id="slide_14_son2" class="row text-center mt-auto mb-auto p-5 embed-responsive ml-auto mr-auto">
                    <audio controls class="embed-responsive-item" id="son2">
                    <source src=<?=$audios[1]?>>
                    </audio>
                    <div id="slide_14_son_legende2" class="text-center p-2"><?php
                        echo render_block($paragraphes[1]);
                    ?></div>
                </div>
            </div>
        </div>
        </div>
</section>