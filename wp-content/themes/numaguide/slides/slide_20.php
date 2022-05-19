<?php

/**
 * Template Name: Slide 20
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

<section id="slide_20">
    <div id="slide_20_c" class="container-fluid">
        <div id="slide_20_r" class="row vh-100">
            <div id="slide_20_div1" class="col text-justify mt-auto mb-auto p-5">
                <div id="slide_20_texte1" class="slide_20_texte">
                    <?php
                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                echo render_block($block);
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="slide_20_div2" class="col text-center mt-auto mb-auto">
                <div id="slide_20_image2" class="slide_20_image2">
                    <img id="slide_20_image" class="img-fluid" src=<?=$link?>>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>