<?php

/**
 * Template Name: Slide 21
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
    
<section id="slide_21">
    <div id="slide_21_c" class="container-fluid">
        <div id="slide_21_r" class="row vh-100">
            <div id="slide_21_div1" class="col text-center mt-auto mb-auto">
                <div id="slide_21_image2" class="slide_21_image2">
                    <img id="slide_21_image" class="img-fluid" src=<?=$link?>>
                </div>
            </div>
            <div id="slide_21_div2" class="col text-justify mt-auto mb-auto p-5">
                <div id="slide_21_texte2" class="slide_21_texte">
                    <?php
                        foreach ($blocks as $block) {
                            if ($block['blockName'] == 'core/paragraph') {
                                echo render_block($block);
                            }
                        }
                    ?>
                </div>
            </div>

        </div>
    </div>
    </div>

</section>