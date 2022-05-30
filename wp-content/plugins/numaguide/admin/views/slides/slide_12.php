<?php

/**
 * Template Name: Slide 12
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

<section id="slide_12">
    <div id="slide_12_c" class="container-fluid">
        <div id="slide_12_r" class="row vh-100">
            <div id="slide_12_div1" class="row text-justify mt-auto mb-auto p-5 ml-auto mr-auto">
                <div id="slide_12_texte1" class="slide_12_texte">
                    <?php
                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                echo render_block($block);
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="slide_12_div2" class="row text-center mt-auto mb-auto pb-5 mr-auto ml-auto">
                <div id="slide_12_image2" class="slide_12_image2">
                    <img id="slide_12_image" class="img-fluid" src=<?=$link?>>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>