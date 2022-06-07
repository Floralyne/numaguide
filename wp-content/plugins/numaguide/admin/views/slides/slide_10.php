<?php

/**
 * Template Name: Slide 10
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
            $link = substr($block['innerHTML'], 67);
            $link = substr($link, 0, -56);
        }
    }
?>

<section id="slide_10">
    <div id="slide_10_c" class="container-fluid">
        <div id="slide_10_r" class="row vh-100 mr-auto ml-auto">
            <div id="slide_10_div1" class="col text-justify mt-auto mb-auto p-5">
                <div id="slide_10_texte1" class="slide_10_texte">
                    <?php
                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                echo render_block($block);
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="slide_10_div2" class="col text-center mt-auto mb-auto ml-auto mr-auto">
                <div id="slide_10_image2">
                    <img id="slide_10_image" class="img-fluid" src=<?=$link?>>
                </div>
            </div>
        </div>
    </div>
</section>