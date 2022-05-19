<?php

/**
 * Template Name: Slide 22
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<?php
    $post_tab = $args['article'];
    $post = $post_tab[0];
    $blocks = parse_blocks($post->post_content);
    $link = '';
    foreach ($blocks as $block) {
        if ($block['blockName'] == 'core/image') {
            $link = substr($block['innerHTML'], 51);
            $link = substr($link, 0, -39);
        }
    }
?>

<section id="slide_22">
    <div id="slide_22_c" class="container-fluid">
        <div id="slide_22_r" class="row vh-100">
            <div id="slide_22_div1" class="row text-justify mt-auto mb-auto p-5">
                <div id="slide_22_texte1" class="slide_22_texte">
                    <?php
                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                echo render_block($block);
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="row text-center mt-auto mb-auto pb-5">
                <div id="slide_22_image2" class="slide_22_image2">
                    <img id="slide_22_image" class="img-fluid" src=<?=$link?>>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>